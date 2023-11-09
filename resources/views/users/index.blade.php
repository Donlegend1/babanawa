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
																																
																												<h4 class="card_title">Users List</h4>
																												<div class="single-table">

																																
																																<div class="table-responsive">
																																				
																																			
																																				<table id="expenseTable" class="table-hover progress-table table text-center">
																																								<thead class="text-uppercase">
																																												<tr>
																																																<th scope="col">S/N</th>
																																																<th scope="col">Name</th>
																																																<th scope="col">School</th>
																																																<th scope="col">Role</th>
																																																<th scope="col">Email</th>

																																																<th scope="col">Phone</th>
																																																<th scope="col">Action</th>

																																												</tr>
																																								</thead>
																																								<tbody>
																																												@foreach ($users as $user)
																																																<tr>
																																																				<th scope="row">{{ $loop->iteration }}</th>
																																																				<td>{{ $user->name }}</td>
																																																				<td>{{ $user->school? $user->school->name:"" }}</td>

																																																				<td>{{ $user->role->name }}</td>
																																																				<td>{{ $user->email }}</td>
																																																				<td>{{ $user->telephone }}</td>

																																																			
																																																				{{-- <td>{{ Carbon\Carbon::parse($user->created_at)->isoFormat('Do MMMM YYYY') }}
																																																				</td> --}}

																																																				<td>
																																																								<ul class="d-flex justify-content-center">
																																																												<li class="mr-3">
                                                                                                                                                                                                                                                    <a href="/user/{{$user->id }}">
																																																																<button type="button" class="btn btn-inverse-primary"
																																																																				data-toggle="modal"
																																																																				data-target="#editModal{{ $loop->iteration }}">
																																																																				<i class="fa fa-edit"></i>
																																																																</button>
                                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                                <button type="button" class="btn btn-inverse-danger"
																																																																				data-toggle="modal"
																																																																				data-target="#deleteModal{{ $loop->iteration }}">
																																																																				<i class="ti-trash"></i>
																																																																</button>
																																																												</li>
																																																												
																																																								</ul>
																																																				</td>
																																																</tr>
						
																																																<!-- Delete Modal for Current Row -->
																																																<div class="modal fade" id="deleteModal{{ $loop->iteration }}"
																																																				tabindex="-1" role="dialog"
																																																				aria-labelledby="deleteModalLabel{{ $loop->iteration }}"
																																																				aria-hidden="true">
																																																				<div class="modal-dialog">
																																																								<div class="modal-content">
																																																												<div class="modal-header">
																																																																<h5 class="modal-title">
																																																																				delete{{ $user->name }} </h5>
																																																																<button type="button" class="close"
																																																																				data-dismiss="modal"><span>&times;</span></button>
																																																												</div>
																																																												<form action={{ route('delete_user') }} method="POST">
																																																																@csrf
																																																																<div class="card">
																																																																				<div class="card-body">

																																																																								<div class="form-group">
																																																																												<h5>Pls confirm you want to delete
																																																																																{{ $user->name }} the {{ $user->role->name }} of
																																																																																{{ $user->school? $user->school->name:"" }} 
																																																																																
																																																																																 ?
																																																																												</h5>

																																																																												<input type="hidden" name="id"
																																																																																value="{{ $user->id }}">

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
