<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Expenses;
use App\Models\ExpensesType;
use App\Models\Role;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        // Retrieve all users with their associated roles and schools
        $users = User::with('role', 'school')->get();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::all();
        $schools = School::all();

        return view('users.create', compact('roles', 'schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
 
        public function store(StoreUserRequest $request)
        {
          
            // Validate the request using the form request validation rules
           $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'telephone' => 'required|string|max:15',
                'school_id' => 'required|integer',
                'role_id' => 'required|integer',
                'password' => 'required|string|min:8|confirmed',
            ]);

                User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'telephone' => $request->input('telephone'),
                    'school_id' => $request->input('school_id'),
                    'role_id' => $request->input('role_id'),
                    'password' => Hash::make($request->input('name')),
                ]);
                return redirect('/users')->with("message", "User Created Successfully");

        
        }






    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $roles = Role::all();
        $schools = School::all();
        $user = User::where('id', $id)->first();
      
        return view('users.edit', compact('user', 'roles', 'schools'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUserRequest $request, $id)
    {
        // Find the user by ID
        $user = User::find($id);

        // Validate the request using the form request validation rules
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id, // Specify current user ID to exclude from unique check
            'telephone' => 'required|string|max:15',
            'school_id' => 'required|integer',
            'role_id' => 'required|integer',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update user data based on validated data
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->telephone = $validatedData['telephone'];
        $user->school_id = $validatedData['school_id'];
        $user->role_id = $validatedData['role_id'];

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']);
        }

        // Save the updated user data
        $user->save();

        return redirect('/users')->with("message", "User Updated Successfully");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {
            $delete = $user->delete();
            if ($delete) {
                return redirect()->back()->with("message", " User  deleted successfully");
            } else {
                return redirect()->back()->with("message", " Error deleting user");
            }
        } else {
            return redirect()->back()->with("message", " No user find with that parameter");
        }
    }
}