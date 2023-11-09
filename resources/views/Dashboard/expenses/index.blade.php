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

								<!--=========================*
																																																											End Side Bar Menu
																																																				*===========================-->

								<!--==================================*
																																																															Main Content Section
																																																				*====================================-->

												<div class="row">
																<!-- Progress Table start -->
																<div class="col-12 mt-4">
																				<div class="card">
																								<div class="card-body">
																																<div class="text-right">
																	<button class="btn btn-primary" id="expense">Export to Excel</button>

																				</div>
																												<h4 class="card_title">Expense List</h4>
																												<div class="single-table">

																																<div class="text-right">
																																				<button type="button" class="btn btn-primary mt-2" data-toggle="modal"
																																								data-target="#exampleModalLong"><span class="fa fa-file mr-3"></span>Add
																																								New</button>
																																				<div class="modal fade" id="exampleModalLong">
																																								<div class="modal-dialog">
																																												<div class="modal-content">
																																																<div class="modal-header">
																																																				<h5 class="modal-title">Expense Type</h5>
																																																				<button type="button" class="close"
																																																								data-dismiss="modal"><span>&times;</span></button>
																																																</div>
																																																<form action={{ route('save_expense') }} method="POST">
																																																				@csrf
																																																				<div class="card">
																																																								<div class="card-body">

																																																												<div class="form-group">
																																																																<label for="expense_type_1">Expense Type </label>
																																																																<select class="form-control form-control-lg"
																																																																				name="expense_type" id="expense_type_1">
																																																																				<option value="">Select Expense Type</option>
																																																																				@foreach ($expensesType as $type)
																																																																								<option value="{{ $type->id }}">
																																																																												{{ $type->name }}</option>
																																																																				@endforeach
																																																																</select>
																																																												</div>
																																																												<div class="form-group">
																																																																<label for="amount">Unit Price </label>
																																																																<input class="form-control form-control-lg"
																																																																				name="unit_price" type="text"
																																																																				placeholder="Price per unit"
																																																																				id="example-text-input-lg">
																																																												</div>
																																																													<div class="form-group">
																																																																<label for="description">Description </label>
																																																																<input class="form-control form-control-lg"
																																																																				name="description" type="text"
																																																																				placeholder="Description"
																																																																				id="example-text-input-lg">
																																																												</div>
																																																												<div class="form-group">
																																																																<label for="amount">Qunatity </label>
																																																																<input class="form-control form-control-lg" name="qty"
																																																																				type="integer" placeholder="Qunatity"
																																																																				id="example-text-input-lg">
																																																												</div>

																																																								</div>
																																																				</div>
																																																				<div class="modal-footer">
																																																								<button type="button" class="btn btn-light"
																																																												data-dismiss="modal">Close</button>
																																																								<button type="submit" class="btn btn-primary">Save</button>
																																																				</div>
																																																</form>
																																												</div>
																																								</div>
																																				</div>
																																</div>
																																<div class="table-responsive">
																																				
																																				<div class="form-group">
																																								<label for="datepicker">Select Date:</label>
																																								<input type="date" id="datepicker" class="form-control">
																																				</div>
																																				<div class="form-group">
																																								<label for="expenseType">Select Expense Type:</label>
																																								<select id="expenseType" class="form-control">
																																												<option value="">--Select--</option>
																																												@foreach ($expensesType as $type)
																																																<option value="{{ $type->id }}">
																																																				{{ $type->name }}</option>
																																												@endforeach
																																								</select>
																																				</div>
																																				<table id="expenseTable" class="table-hover progress-table table text-center">
																																								<thead class="text-uppercase">
																																												<tr>
																																																<th scope="col">S/N</th>
																																																<th scope="col">Expense Type</th>
																																																<th scope="col">Sort Code</th>

																																																<th scope="col">Description</th>
																																																<th scope="col">Unit Price</th>
																																																<th scope="col">Qunatity</th>

																																																<th scope="col">Amount</th>

																																																<th scope="col">Date</th>
																																																<th scope="col">Action</th>

																																												</tr>
																																								</thead>
																																								<tbody>
																																												@foreach ($allExpenses as $expense)
																																																<tr>
																																																				<th scope="row">{{ $loop->iteration }}</th>
																																																				<td>{{ $expense->expense_type_name }}</td>
																																																				<td>{{ $expense->sort_code }}</td>

																																																				<td>{{ $expense->description }}</td>
																																																				<td>{{ number_format($expense->unit_price) }}</td>
																																																				<td>{{ $expense->qty }}</td>
																																																				<td>{{ number_format($expense->amount) }}</td>

																																																				<td>{{ Carbon\Carbon::parse($expense->created_at)->isoFormat('Do MMMM YYYY') }}
																																																				</td>

																																																				<td>
																																																								<ul class="d-flex justify-content-center">
																																																												<li class="mr-3">
																																																																<button type="button" class="btn btn-inverse-primary"
																																																																				data-toggle="modal"
																																																																				data-target="#editModal{{ $loop->iteration }}">
																																																																				<i class="fa fa-edit"></i>
																																																																</button>
																																																												</li>
																																																												<li>
																																																																<button type="button" class="btn btn-inverse-danger"
																																																																				data-toggle="modal"
																																																																				data-target="#deleteModal{{ $loop->iteration }}">
																																																																				<i class="ti-trash"></i>
																																																																</button>
																																																												</li>
																																																								</ul>
																																																				</td>
																																																</tr>
																																																<div class="modal fade" id="editModal{{ $loop->iteration }}"
																																																				tabindex="-1" role="dialog"
																																																				aria-labelledby="editModalLabel{{ $loop->iteration }}"
																																																				aria-hidden="true">
																																																				<div class="modal-dialog">
																																																								<div class="modal-dialog">
																																																												<div class="modal-content">
																																																																<div class="modal-header">
																																																																				<h5 class="modal-title">Expense Type</h5>
																																																																				<button type="button" class="close"
																																																																								data-dismiss="modal"><span>&times;</span></button>
																																																																</div>
																																																																<form action={{ route('edit_expense') }} method="POST">
																																																																				@csrf
																																																																				<div class="card">
																																																																								<div class="card-body">

																																																																												<div class="form-group">
																																																																																<label for="expense_type_1">Expense Type
																																																																																</label>
																																																																																<select
																																																																																				class="form-control form-control-lg"
																																																																																				name="expense_type"
																																																																																				id="expense_type_1">
																																																																																				<option value="">Select Expense
																																																																																								Type</option>
																																																																																				@foreach ($expensesType as $type)
																																																																																								<option
																																																																																												value="{{ $type->id }}"
																																																																																												{{ $type->name == $expense->expense_type_name ? 'selected' : '' }}>
																																																																																												{{ $type->name }}
																																																																																								</option>
																																																																																				@endforeach
																																																																																</select>
																																																																																<input type="hidden" name="id"
																																																																																				value="{{ $expense->id }}">

																																																																												</div>
																																																																												<div class="form-group">
																																																																																<label for="amount">Unit Price </label>
																																																																																<input class="form-control form-control-lg"
																																																																																				name="unit_price" type="text"
																																																																																				placeholder="Price per unit"
																																																																																				id="example-text-input-lg"
																																																																																				value="{{ $expense->unit_price }}">
																																																																												</div>
																																																																												<div class="form-group">
																																																																																<label for="amount">Qunatity </label>
																																																																																<input class="form-control form-control-lg"
																																																																																				name="qty" type="integer"
																																																																																				placeholder="Qunatity"
																																																																																				value="{{ $expense->qty }}"
																																																																																				id="example-text-input-lg">
																																																																												</div>

																																																																								</div>
																																																																				</div>
																																																																				<div class="modal-footer">
																																																																								<button type="button" class="btn btn-light"
																																																																												data-dismiss="modal">Close</button>
																																																																								<button type="submit"
																																																																												class="btn btn-primary">Save</button>
																																																																				</div>
																																																																</form>
																																																												</div>
																																																								</div>
																																																				</div>
																																																				<!-- Modal content for editing the current row -->
																																																</div>

																																																<!-- Delete Modal for Current Row -->
																																																<div class="modal fade" id="deleteModal{{ $loop->iteration }}"
																																																				tabindex="-1" role="dialog"
																																																				aria-labelledby="deleteModalLabel{{ $loop->iteration }}"
																																																				aria-hidden="true">
																																																				<div class="modal-dialog">
																																																								<div class="modal-content">
																																																												<div class="modal-header">
																																																																<h5 class="modal-title">
																																																																				delete{{ $expense->expense_type_name }} </h5>
																																																																<button type="button" class="close"
																																																																				data-dismiss="modal"><span>&times;</span></button>
																																																												</div>
																																																												<form action={{ route('delete_expense') }} method="POST">
																																																																@csrf
																																																																<div class="card">
																																																																				<div class="card-body">

																																																																								<div class="form-group">
																																																																												<h5>Pls confirm you want to delete
																																																																																{{ $expense->expense_type_name }} of
																																																																																{{ number_format($expense->amount) }} made
																																																																																on
																																																																																{{ Carbon\Carbon::parse($expense->created_at)->isoFormat('Do MMMM YYYY') }} ?
																																																																												</h5>

																																																																												<input type="hidden" name="id"
																																																																																value="{{ $expense->id }}">

																																																																								</div>

																																																																				</div>
																																																																</div>
																																																																<div class="modal-footer">
																																																																				<button type="button" class="btn btn-light"
																																																																								data-dismiss="modal">Close</button>
																																																																				<button type="submit"
																																																																								class="btn btn-danger">Delete</button>
																																																																</div>
																																																												</form>
																																																								</div>
																																																				</div>
																																																</div>
																																												@endforeach

																																								</tbody>
																																				</table>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
																<!-- Progress Table end -->
												</div>

																																																							
@endsection
