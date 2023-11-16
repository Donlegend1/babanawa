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
								Mailbox
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="mail_content">
								<div class="row">
									<div class="col-lg-12 mb-4">

										<h3 class="mail_head pull-left">{{ $message->subject }}</h3>

									</div>

									<div class="col-lg-12">
										<h5 class="pull-left mb-mob-4">

											<span class="d-block recipient">From: {{ $message->sender->email }}</span>
											<span
												class="mailbox-time recipient">{{ Carbon\Carbon::parse($message->created_at)->isoFormat('Do MMMM YYYY') }}</span>
										</h5>

									</div>

									<div class="mail_message col-lg-12">

										<div class="mt-5">
											{!! $message->message !!}
										</div>

										<hr>
										@if ($message->expenses->count() > 0)
											<div class="table-responsive">

												<table id="expenseTable" class="table-hover progress-table table text-center">
													<thead class="text-uppercase">
														<tr>
															<th scope="col">S/N</th>
															<th scope="col">Expense Type</th>

															<th scope="col">Description</th>
															<th scope="col">Unit Price</th>
															<th scope="col">Qunatity</th>

															<th scope="col">Amount</th>

															<th scope="col">Date</th>

														</tr>
													</thead>
													<tbody>
														@foreach ($message->expenses as $expense)
															<tr>
																<th scope="row">{{ $loop->iteration }}</th>
																<td>{{ $expense->expenseType->name }}</td>

																<td>{{ $expense->description }}</td>
																<td>{{ number_format($expense->unit_price) }}</td>
																<td>{{ $expense->qty }}</td>
																<td>{{ number_format($expense->amount) }}</td>

																<td>{{ Carbon\Carbon::parse($expense->created_at)->isoFormat('Do MMMM YYYY') }}
																</td>

															</tr>

															<!-- Delete Modal for Current Row -->
														@endforeach

													</tbody>
												</table>
											</div>
											<hr>
										@endif

										@if ($message->recipients->count() > 0)
											<div class="container">
												<div class="row">
													<div class="col-md-12 mx-auto">
														<h2 class="mb-4 text-center">Comments List</h2>
														<div class="comments-list">
															<ul class="list-group">
																<li class="list-group-item list-group-item-primary d-flex justify-content-between align-items-center">
																	<div class="col-2">
																		<span class="comment-subheading">No.</span>
																	</div>
																	<div class="col-3">
																		<span class="comment-subheading">Name</span>
																	</div>
																	<div class="col-2">
																		<span class="comment-subheading">Status</span>
																	</div>
																	<div class="col-3">
																		<span class="comment-subheading">Comment</span>
																	</div>
																	<div class="col-2">
																		<span class="comment-subheading">Date</span>
																	</div>
																</li>
																@foreach ($message->recipients as $recipient)
																	<li class="list-group-item d-flex justify-content-between align-items-center">
																		<div class="col-2">
																			<span>{{ $loop->iteration }}</span>
																		</div>
																		<div class="col-3">
																			<span>{{ $recipient->user->name }}</span>
																		</div>
																		<div class="col-2">
																			<span
																				class="badge badge-{{ $recipient->recipient_status === 1 ? 'success' : ($recipient->recipient_status === 2 ? 'danger' : 'warning') }}">
																				{{ $recipient->recipient_status === 1 ? 'Approved' : ($recipient->recipient_status === 2 ? 'Declined' : 'Not Approved') }}
																			</span>

																		</div>
																		<div class="col-3">
																			@if ($recipient->decline_comment)
																				<span>{{ $recipient->decline_comment }}</span>
																			@else
																				<span>{{ '' }}</span>
																			@endif
																		</div>
																		<div class="col-2">
																			<span>{{ Carbon\Carbon::parse($recipient->updated_at)->isoFormat('Do MMMM YYYY') }}</span>
																		</div>
																	</li>
																@endforeach
															</ul>
														</div>
													</div>
												</div>
											</div>
										@endif

										


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
