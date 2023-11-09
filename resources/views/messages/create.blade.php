@extends('Layouts.app')
@section('content')
				<div class="page-container">
								@include('Layouts.sidebar')
								<div class="main-content-inner">
												<div class="row">
																<div class="col-lg-12 mb-4">
																				<div class="card">
																								<div class="card-body">
																												<h3>
																																Write Email
																												</h3>
																								</div>
																				</div>
																</div>
												</div>
												<div class="row">

																<div class="col-lg-12 col-sm-12 mt-mob-4">
																				<div class="card">
																								<div class="card-body">
																												<div class="mail_content">
																																<div class="row">
																																				<div class="col-lg-12">
																																								<h3 class="mail_head mb-3">Compose Message</h3>
																																				</div>

																																				<div class="mail_message col-lg-12">
																																								<form action="{{ route('save-message') }}" method="POST">
																																												@csrf
																																												<div class="form-group">
																																																<label for="to-select" class="col-form-label">To:</label>
																																																<select id="to-select" name="recievers[]" class="form-control" multiple>
																																																				@foreach ($users as $user)
																																																								<option value="{{ $user->id }}">{{ $user->name }}</option>
																																																				@endforeach
																																																</select>
																																												</div>

																																												<div class="form-group">
																																																<label for="cc-select" class="col-form-label">CC:</label>
																																																<select id="cc-select" name="cc[]" class="form-control" multiple>
																																																				@foreach ($users as $user)
																																																								<option value="{{ $user->id }}">{{ $user->name }}</option>
																																																				@endforeach
																																																</select>
																																												</div>

																																												<div class="form-group">
																																																<label for="example-text-input" class="col-form-label">Subject</label>
																																																<input class="form-control" name="subject" type="text"
																																																				value="Email Subject" id="example-text-input">
																																												</div>
																																												<div class="form-group">
																																												<input type="hidden" name="message" id="message">

																																																<label for="example-text-input" class="col-form-label">Compose
																																																				Message</label>
																																																<textarea name="editor1" id="editor1"></textarea>
																																												</div>

																																												<div class="container">
																																																<div class="form-row">
																																																				<div class="col-md-3">
																																																								<div class="form-group">
																																																												<label for="expense_type" class="col-form-label">Expense
																																																																Type</label>
																																																												<select name="expense_type[]" class="form-control">
																																																																@foreach ($expensesType as $type)
																																																																				<option value="{{ $type->id }}">{{ $type->name }}
																																																																				</option>
																																																																@endforeach
																																																												</select>
																																																								</div>
																																																				</div>
																																																				<div class="col-md-3">
																																																								<div class="form-group">
																																																												<label for="unit_price" class="col-form-label">Price</label>
																																																												<input class="form-control" id="unit_price" name="unit_price[]"
																																																																type="text" value="">
																																																								</div>
																																																				</div>
																																																				<div class="col-md-3">
																																																								<div class="form-group">
																																																												<label for="qty" class="col-form-label">Quantity</label>
																																																												<input class="form-control" id="qty" name="qty[]"
																																																																type="text" value="">
																																																								</div>
																																																				</div>
																																																				<div class="col-md-3">
																																																								<div class="form-group">
																																																												<label for="amount" class="col-form-label">Total Price</label>
																																																												<input class="form-control" readonly id="amount" name="amount[]"
																																																																type="text" value="">
																																																								</div>
																																																				</div>
																																																				<div class="col-md-1 text-right">
																																																								<button type="button" class="btn btn-danger remove-row"
																																																												style="display: none;">Remove</button>
																																																				</div>
																																																</div>
																																																<button type="button" class="btn btn-primary mt-3" id="add-row">Add
																																																				Row</button>
																																												</div>
																																												<div class="form-group text-right">
																																																<button type="submit" class="btn btn-primary mb-3"><i
																																																								class="ion-paper-airplane"></i> Send Message</button>
																																												</div>
																																								</form>
																																				</div>
																																</div>

																												</div>
																								</div>
																				</div>

																</div>
												</div>
								</div>
				</div>
@endsection
