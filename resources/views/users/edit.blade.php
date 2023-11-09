@extends('Layouts.app')

@section('content')
				<!--[if lt IE 8]>
																																																<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
																																																<![endif]-->

				<!--=========================*
																																																									Page Container
																																																*===========================-->
				<div class="page-container">

								<!--=========================*
																																																													Side Bar Menu
																																																				*===========================-->
		@include('Layouts.sidebar')
           <div class="main-content-inner">
    <div class="row">
        <!-- Textual inputs -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Register a new User</h4>
                    <p class="text-muted font-14 mb-4">Fill in details to register new user</p>
                    <form action="/update-user/{{$user->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{$user->name}}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input class="form-control" type="email" value="{{$user->email}}" id="email" name="email" placeholder="Enter your email">
                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="col-form-label">Telephone</label>
                            <input class="form-control" type="text" value="{{$user->telephone}}" id="telephone" name="telephone" placeholder="Enter your phone number">
                              @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      <div class="form-group">
                        <label for="select" class="col-form-label">School</label>
                        <select class="form-control" id="select" name="school_id">
                            <option>Select</option>
                            @foreach ($schools as $school)
                                <option value="{{ $school->id }}" {{ $user->school_id == $school->id ? 'selected' : '' }}>
                                    {{ $school->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                        <div class="form-group">
                            <label for="role" class="col-form-label">Role</label>
                            <select class="form-control" id="role" name="role_id">
                                <option>--select--</option>

                                @foreach ($roles as $role )
                                 <option value="{{$role->id}}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{$role->name}}</option>   
                                @endforeach
                                
                             
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password" class="">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                              @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="confirm_password" class="">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="Confirm your password">
                              @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

          
        
        </div>
																																																											
																			
@endsection
