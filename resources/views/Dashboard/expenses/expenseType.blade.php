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

								<div class="row">
												@if (session('message'))
																<div class="alert alert-success">
																				{{ session('message') }}
																</div>
												@endif
												<!-- Progress Table start -->
												<div class="col-12 mt-4">
																<div class="card">
																				<div class="card-body">
																								<h4 class="card_title">Expenses Types List</h4>
																								<div class="single-table">
																												<div class="text-right">
																																<button type="button" class="btn btn-primary btn-flat mt-2" data-toggle="modal"
																																				data-target="#exampleModalLong"><span class="fa fa-file mr-3"></span>Add New</button>
																																<div class="modal fade" id="exampleModalLong">
																																				<div class="modal-dialog">
																																								<div class="modal-content">
																																												<div class="modal-header">
																																																<h5 class="modal-title">Expense Type</h5>
																																																<button type="button" class="close"
																																																				data-dismiss="modal"><span>&times;</span></button>
																																												</div>
																																												<form action={{ route('save_expenseType') }} method="POST">
																																																@csrf
																																																<div class="card">
																																																				<div class="card-body">

																																																								<div class="form-group">
																																																												<label for="name">Name</label>

																																																												<input class="form-control form-control-lg" name="name"
																																																																type="text" placeholder="Expense Type"
																																																																id="example-text-input-lg">
																																																								</div>

																																																								<div class="form-group">
																																																												<label for="description">Description</label>
																																																												<input class="form-control form-control-lg" name="description"
																																																																type="text" placeholder="Description"
																																																																id="example-text-input-lg">
																																																								</div>
																																																								<div class="form-group">
																																																												<label for="description">Source of Expense</label>

																																																												<select class="form-control" id="select" name="source_id">
																																																																<option>Select</option>
																																																																@foreach ($associates as $associate)
																																																																				<option value="{{ $associate->id }}">
																																																																								{{ $associate->name }}</option>
																																																																@endforeach
																																																												</select>
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

																																<div class="table-responsive">
																																				<table class="table-hover progress-table table text-center">
																																								<thead class="text-uppercase">
																																												<tr>
																																																<th scope="col">S/N</th>
																																																<th scope="col">Name</th>
																																																<th scope="col">Source of Finance</th>
																																																<th scope="col">School</th>

																																																<th scope="col">Action</th>
																																												</tr>
																																								</thead>
																																								<tbody>
																																												@foreach ($expensesType as $type)
																																																<tr>
																																																				<th scope="row">{{ $loop->iteration }}</th>
																																																				<td>{{ $type->name }}</td>

																																																				<td>{{ $type->source->name }}</td>
																																																				<td>{{ $type->school->name }}</td>
																																																				<td>
																																																								<ul class="d-flex justify-content-center">
																																																												<li class="mr-3">

																																																																<button type="button" class="btn btn-inverse-primary"
																																																																				data-toggle="modal"
																																																																				data-target="#editModal{{ $loop->iteration }}">
																																																																				<i class="fa fa-edit"></i>
																																																																</button>

																																																																<button type="button" class="btn btn-inverse-danger"
																																																																				data-toggle="modal"
																																																																				data-target="#deleteModal{{ $loop->iteration }}">
																																																																				<i class="ti-trash"></i>
																																																																</button>
																																																												</li>

																																																								</ul>
																																																				</td>
																																																</tr>

																																																<div class="modal fade" id="editModal{{ $loop->iteration }}">
																																																				<div class="modal-dialog">
																																																								<div class="modal-content">
																																																												<div class="modal-header">
																																																																<h5 class="modal-title">Edit Expense Type</h5>
																																																																<button type="button" class="close"
																																																																				data-dismiss="modal"><span>&times;</span></button>
																																																												</div>
																																																												<form action={{ route('edit_expenseType') }} method="POST">
																																																																@csrf
																																																																<div class="card">
																																																																				<div class="card-body">

																																																																								<div class="form-group">
																																																																												<label for="name">Name</label>

																																																																												<input class="form-control form-control-lg"
																																																																																name="name" type="text"
																																																																																placeholder="Expense Type"
																																																																																id="example-text-input-lg"
																																																																																value="{{ $type->name }}">
																																																																								</div>

																																																																								<div class="form-group">
																																																																												<label for="description">Description</label>
																																																																												<input class="form-control form-control-lg"
																																																																																name="description" type="text"
																																																																																placeholder="Description"
																																																																																id="example-text-input-lg"
																																																																																value="{{ $type->description }}">
																																																																								</div>
																																																																								<div class="form-group">
																																																																												<label for="description">Source of
																																																																																Expense</label>

																																																																												<select class="form-control" id="select"
																																																																																name="source_id">
																																																																																<option>Select</option>
																																																																																@foreach ($associates as $associate)
																																																																																				<option value="{{ $associate->id }}"
																																																																																								{{ $type->source_id == $associate->id ? 'selected' : '' }}>
																																																																																								{{ $associate->name }}
																																																																																				</option>
																																																																																@endforeach
																																																																												</select>

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

																																																<!-- Delete Modal for Current Row -->
																																																<div class="modal fade" id="deleteModal{{ $loop->iteration }}"
																																																				tabindex="-1" role="dialog"
																																																				aria-labelledby="deleteModalLabel{{ $loop->iteration }}"
																																																				aria-hidden="true">
																																																				<div class="modal-dialog">
																																																								<div class="modal-content">
																																																												<div class="modal-header">
																																																																<h5 class="modal-title">
																																																																				delete{{ $type->name }} </h5>
																																																																<button type="button" class="close"
																																																																				data-dismiss="modal"><span>&times;</span></button>
																																																												</div>
																																																												<form action={{ route('delete_expense_type') }}
																																																																method="POST">
																																																																@csrf
																																																																<div class="card">
																																																																				<div class="card-body">

																																																																								<div class="form-group">
																																																																												<h5>Pls confirm you want to delete
																																																																																{{ $type->name }} which is associated
																																																																																with
																																																																																{{ $type->source->name }} belonging to
																																																																																{{ $type->school ? $type->school->name : '' }}

																																																																																?
																																																																												</h5>

																																																																												<input type="hidden" name="id"
																																																																																value="{{ $type->id }}">

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
