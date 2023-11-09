<?php

namespace App\Http\Controllers;

use App\Models\Message_recipient;
use App\Http\Requests\StoreMessage_recipientRequest;
use App\Http\Requests\UpdateMessage_recipientRequest;

class MessageRecipientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMessage_recipientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessage_recipientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message_recipient  $message_recipient
     * @return \Illuminate\Http\Response
     */
    public function show(Message_recipient $message_recipient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message_recipient  $message_recipient
     * @return \Illuminate\Http\Response
     */
    public function edit(Message_recipient $message_recipient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMessage_recipientRequest  $request
     * @param  \App\Models\Message_recipient  $message_recipient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMessage_recipientRequest $request, Message_recipient $message_recipient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message_recipient  $message_recipient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message_recipient $message_recipient)
    {
        //
    }
}
