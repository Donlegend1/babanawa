<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use App\Models\ExpensesType;
use App\Models\Expenses;
use App\Models\Message_recipient;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;




class MessageController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages =
        Message_recipient::with('message.sender')
        ->where('user_id', Auth::user()->id)
        ->orderBy('created_at', 'desc')
        ->get();
            // dd($messages);
        return view("messages.index", compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $users =User::where("school_id", 1)->get();
    $expensesType = ExpensesType::all();
        
        return view("messages.create", compact('users', 'expensesType'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageRequest $request)
    {

        // $request->validate([
        //     'subject' => 'required|string|max:255',
        //     'message' => 'required|string',
        //     'recievers' => 'required|array|min:1', 
        //     'cc' => 'nullable|array', 
        //     'expense_type' => 'required|array',
        //     'unit_price' => 'required|array',
        //     'qty' => 'required|array',
        //     'amount' => 'required|array',
        // ]);

        // Get the last message_id from the database and increment it by one
       $lastMessageId = Message::max('id') ?? 0;
$lastMessageId += 1;

// Create the main message
$message = new Message();
$message->id = $lastMessageId;
$message->subject = $request->input('subject');
$message->message = $request->input('message');
$message->message_status_id = 0;
$message->status_id = 0;
$message->created_by = Auth::user()->id;
$message->save();

// Loop through receivers and create MessageRecipient records
foreach ($request->input('recievers') as $receiverId) {
    $recipient = new Message_recipient();
    $recipient->message_id = $lastMessageId;
    $recipient->user_id = $receiverId;
    $recipient->is_cc = false;
    $recipient->recipient_status = 0; // Pending
    $recipient->delegate_to = null;
    $recipient->save();
}

// Loop through CC recipients and create MessageRecipient records
if ($request->has('cc')) {
    foreach ($request->input('cc') as $ccId) {
        $ccRecipient = new Message_recipient();
        $ccRecipient->message_id = $lastMessageId;
        $ccRecipient->user_id = $ccId;
        $ccRecipient->is_cc = true;
        $ccRecipient->recipient_status = 0; // Pending
        $ccRecipient->delegate_to = null;
        $ccRecipient->save();
    }
}

// Assuming you want to save expenses related to this message
if ($request->has('unit_price') && is_array($request->unit_price)) {
    foreach ($request->unit_price as $key => $value) {
        $expense = new Expenses();
        $expense->unit_price = $request->unit_price[$key];
        $expense->message_id = $lastMessageId;
        $expense->qty = $request->qty[$key];
        $expense->amount = $request->qty[$key] * $request->unit_price[$key];
        $expense->user_id = Auth::user()->id;
        $expense->expenses_type_id = $request->expense_type[$key];
        $expense->status_id = 0;
        $expense->save();
    }
}
     return redirect("/messages-sent")->with("message", "messages sent");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message, $id)
    {
        // dd($id);
        $message = Message::with('sender', 'recipients.user', 'expenses.expenseType')
        ->where('id', $id) // Assuming 'id' is the primary key of the messages table
        ->first();
      
    //  dd($message);
        return view("messages.single", compact("message"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMessageRequest  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
    public function sent()
    {
        $messages
       = Message::with('recipients')
        ->where('created_by', Auth::user()->id)
        ->orderBy('created_at', 'desc')
        ->get();
        // dd($messages);

        return view("messages.sent", compact('messages'));
    }

    function approve(Request $request)
    {
        $messageRecipient = Message_recipient::where('message_id', $request->message_id)
            ->where('user_id', Auth::user()->id)
            ->where('recipient_status', 0) // Assuming '0' represents pending approval
            ->first();
            // dd($messageRecipient);

        if ($messageRecipient) {
            $messageRecipient->recipient_status = 1;
            $messageRecipient->decline_comment = null; // Assuming '1' represents approved
            $messageRecipient->save();

            // Check if all recipients for the message have approved
            $allRecipientsApproved = Message_recipient::where('message_id', $messageRecipient->message_id)
                ->where('recipient_status', 0) // Check for pending approvals
                ->doesntExist();

            if ($allRecipientsApproved) {
                Message::where('id', $messageRecipient->message_id)->update(['message_status_id' => 1]);
                 Expenses::where("message_id", $messageRecipient->message_id)
                    ->update(["status_id" => 1]);
            }

            return redirect()->back()->with("success", "Recipient approved successfully");
        } else {
            return redirect()->back()->with("error", "Recipient not found or you don't have permission to approve this recipient");
        }
    }

    public function declineRecipient(Request $request)
    {
        // Validate the request data, including the comment field if needed

        $messageRecipient = Message_recipient::where("message_id",$request->message_id)->where('user_id', Auth::user()->id)->first();
        if ($messageRecipient) {
            $messageRecipient->recipient_status = 2; // Assuming '2' represents declined
            $messageRecipient->decline_comment = $request->comment; // Save the comment
            $messageRecipient->save();

            return redirect()->back()->with("success", "Recipient declined successfully");
        } else {
            return redirect()->back()->with("error", "Recipient not found or you don't have permission to decline this recipient");
        }
    }
}