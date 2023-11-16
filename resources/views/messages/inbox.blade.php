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

										<div class="reply_btn pull-right mb-mob-3 mt-5">
											@foreach ($message->recipients as $recipient)
												@if ($recipient->user_id == Auth::user()->id && $message->message_status_id == 0)
													<div class="reply_btn pull-left">
														@foreach ($message->recipients as $recipient)
															@if (auth()->check() && auth()->user()->id === $recipient->user_id)
																@if ($recipient->recipient_status !== 1)
																	<button class="btn btn-primary mb-mob-3" data-toggle="modal" data-target="#approveModal">

																		<i class="ion-ios-undo"></i> Approve
																	</button>
																	
																@endif
															@endif
														@endforeach
														<button class="btn btn-primary mb-mob-3" data-toggle="modal" data-target="#delegateModal">
															<i class="ion-forward"></i> Delegate
														</button>

														@if (auth()->check() && auth()->user()->id === $recipient->user_id)
															@if ($recipient->recipient_status == 2 && $recipient->decline_comment)
																{{-- Do not show the "Decline" button --}}
															@else
																<button class="btn btn-danger mb-mob-3" data-toggle="modal" data-target="#declineModal">
																	<i class="ion-backward"></i> Decline
																</button>
															@endif
														@endif

													</div>
												@endif
											@endforeach

											<button class="btn btn-secondary">
												<i class="ion-printer"></i>
												Print
											</button>
										</div>

										<div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="approveModalLabel"
											aria-hidden="true">
											<!-- Modal content for Approve action -->
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Approve</h5>
														<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
													</div>
													<form action="/approve-message" method="post">
														@csrf
														<h4>Pls confirm you want to <span class="text-danger">Approve</span>
															this ?</h4>

														<input type="hidden" name="message_id" value="{{ $message->id }}">

														<div class="modal-footer">

															<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-primary">Confirm</button>
														</div>
													</form>
												</div>
											</div>
										</div>

										<div class="modal fade" id="delegateModal" tabindex="-1" role="dialog" aria-labelledby="delegateModalLabel"
											aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Delegate</h5>
														<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
													</div>
													<form action={{ route('delegate') }} method="POST">
														@csrf
														<div class="card">
															<div class="card-body">
																<input type="hidden" name="message_id" value="{{ $message->id }}">

																<div class="form-group">
																	<label for="description">Delegate to</label>
																	<select name="user_id" id="" class="form-control form-control-lg">
																		<option value="">--select--</option>
																		@foreach ($users as $user)
																			<option value="{{ $user->id }}">{{ $user->name }}</option>
																		@endforeach
																	</select>

																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-primary">Save</button>
														</div>
													</form>
												</div>
											</div>
										</div>

										<div class="modal fade" id="declineModal" tabindex="-1" role="dialog"
											aria-labelledby="declineModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Decline</h5>
														<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
													</div>
													<form action="{{ route('declineRecipient') }}" method="POST">
														@csrf
														<div class="card">
															<div class="card-body">
																<div class="form-group">

																	<input type="hidden" name="message_id" value="{{ $message->id }}">

																	<label for="comment">Comment</label>
																	<textarea class="form-control" name="comment" rows="4" placeholder="Enter your comment here"></textarea>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-danger">Decline</button>
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
			</div>
		</div>

	</div>
@endsection
