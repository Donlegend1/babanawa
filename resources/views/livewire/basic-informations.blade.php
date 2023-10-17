<div class="card p-5">

				@if ($currentStep === 1)
								<div class="row mb-3 mt-5">
												<div class="col-sm-12 col-md-2 card mx-auto mb-5" style="background-color: aliceblue;">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="m-2">Basic Information <span>(1)</span></h5>
																</div>
												</div>
												<div class="col-sm-12 col-md-3 card mx-auto mb-5">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="bold m-2">Result Type <span>(2)</span></h5>
																</div>
												</div>
												<div class="col-sm-12 col-md-3 card mx-auto mb-5">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="m-2">Preview Details <span>(3)</span></h5>
																</div>
												</div>

								</div>
								<!-- Step 1: Basic Information -->
								<h3 class="text-center">Basic Information</h3>
								<div class="form-row">
												<div class="form-group col-md-4">
																<label for="exampleInputName1"><i class="ti-user"></i> Surname</label>
																<input wire:model="surname" type="text" class="form-control" id="exampleInputName1">
																@error('surname')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												<div class="form-group col-md-4">
																<label for="exampleInputName1"><i class="ti-user"></i> Lastname</label>
																<input wire:model="firstname" type="text" class="form-control" id="exampleInputName1">
																@error('firstname')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												<div class="form-group col-md-4">
																<label for="exampleInputName1"><i class="ti-user"></i>Other Names</label>
																<input wire:model="othernames" type="text" class="form-control" id="exampleInputName1">
																@error('othernames')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>

								</div>
								<div class="form-row">
												<div class="form-group col-md-3">
																<label for="exampleInputEmail1"><i class="ti-user"></i> Date Of Birth</label>
																<input type="date" wire:model="dob" class="form-control" id="exampleInputEmail1">
																@error('dob')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>

												<div class="form-group col-md-3">
																<label for="gender"><i class="ti-user"></i> Gender</label>
																<select wire:model="gender" class="form-control" id="gender">
																				<option value="">Select Gender</option>
																				@foreach ($genderOptions as $option)
																								<option value="{{ $option }}">{{ $option }}</option>
																				@endforeach
																</select>
																@error('gender')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												<div class="form-group col-md-3">
																<label for="state"><i class="ti-world"></i> State of Origin</label>
																<select wire:model="state" wire:change="getLga" class="form-control" id="state">
																				<option value="">Select State</option>
																				@foreach ($stateOptions as $option)
																								<option value="{{ $option->id }}">{{ $option->name }}</option>
																				@endforeach
																</select>
																@error('state')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												<div class="form-group col-md-3">
																<label for="lga"><i class="ti-world"></i> LGA</label>
																<select wire:model="lga" class="form-control" id="lga">
																				<option value="">Select LGA</option>
																				@foreach ($lgaOptions as $id => $name)
																								<option value="{{ $id }}">{{ $name }}</option>
																				@endforeach
																</select>
																@error('lga')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>

								</div>

								<div class="form-row">
												<div class="form-group col-md-4">
																<label for="exampleInputEmail1"><i class="ti-email"></i> Email address</label>
																<input type="email" wire:model="email" class="form-control" id="exampleInputEmail1">
																@error('email')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												<div class="form-group col-md-4">
																<label for="exampleInputPhone"><i class="ti-mobile"></i> Phone Number</label>
																<input type="text" wire:model="phone" class="form-control" id="exampleInputEmail1">
																@error('phone')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												<div class="form-group col-md-4">
																<label for="exampleInputAddress"><i class="ti-home"></i> Address</label>
																<input type="text" wire:model="address" class="form-control" id="exampleInputEmail1">
																@error('address')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
								</div>

								<div class="col-md-offset-2 text-right">
												@if ($currentStep > 1)
																<button wire:click="previousStep" class="btn btn-primary"> <span
																								class="fa fa-arrow-left"></span>Previous</button>
												@endif

												@if ($currentStep < 3)
																<button wire:click="nextStep" class="btn btn-primary">Next <span
																								class="fa fa-arrow-right"></span></button>
												@else
																<button wire:click="submitForm" class="btn btn-success">Submit</button>
												@endif
								</div>
				@endif
				@if ($currentStep === 2 && $resultType === 0)
								<div class="row mb-3 mt-5">
												<div class="col card mx-3 mb-5">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="m-2">Basic Information <span>(1)</span></h5>
																</div>
												</div>
												<div class="col card mx-4 mb-5" style="background-color: aliceblue;">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="bold m-2">Result Type <span>(2)</span></h5>
																</div>
												</div>
												<div class="col card mx-3 mb-5">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="m-2">Preview Details <span>(3)</span></h5>
																</div>
												</div>

								</div>
								<h3 class="mb-5 text-center">RESULT TYPE</h3>
								<h5 class="mb-3 mt-2 text-center">pls select result type</h5>

								<div class="d-flex flex-column justify-content-center align-items-center container">
												<div class="card col-12 col-md-4 col-sm-12 mb-2">
																<!-- Card 3: NO RESULT -->
																<div class="card card-icon text-center" wire:click="ssce">
																				<div class="card-body">
																								<i class="ti-check-box"></i>
																								<p>SSCE</p>
																								<span>RESULT</span>
																				</div>
																</div>
												</div>
												<div class="card col-12 col-md-4 col-sm-12 mb-2">
																<!-- Card 3: NO RESULT -->
																<div class="card card-icon text-center" wire:click="jsce">
																				<div class="card-body">
																								<i class="ti-check-box"></i>
																								<p>JSCE</p>
																								<span>RESULT</span>
																				</div>
																</div>
												</div>
												<div class="card col-12 col-md-4 col-sm-12 mb-2">
																<!-- Card 3: NO RESULT -->
																<div class="card card-icon text-center" wire:click="noresult">
																				<div class="card-body">
																								<i class="ti-check-box"></i>
																								<p>NO </p>
																								<span>RESULT</span>
																				</div>
																</div>
												</div>
								</div>

								<div class="col-md-offset-2 mt-3 text-right">
												@if ($currentStep > 1)
																<button wire:click="previousStep" class="btn btn-primary"> <span
																								class="fa fa-arrow-left"></span>Previous</button>
												@endif

								</div>
				@endif

				@if ($currentStep == 2 && $resultType === 1)
								<div class="row mb-3 mt-5">
												<div class="col card mx-3 mb-5">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="m-2">Basic Information <span>(1)</span></h5>
																</div>
												</div>
												<div class="col card mx-4 mb-5" style="background-color: aliceblue;">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="bold m-2">Result Type <span>(2)</span></h5>
																</div>
												</div>
												<div class="col card mx-3 mb-5">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="m-2">Preview Details <span>(3)</span></h5>
																</div>
												</div>

								</div>
								<div class="col mb-5">
												<h3 class="text-center">Pls fill in your details for SSCE</h3>
								</div>
								<div class="form-row">
												<div class="form-group col-md-6 col-sm-6">
																<label for="maths"><i class="ti-user"></i> Subject</label>
																<input wire:model="maths" id="maths" readonly type="text" class="form-control">

																@error('maths')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>

												<div class="form-group col-md-6 col-sm-6">
																<label for="maths"><i class="ti-email"></i> Grade</label>
																<select wire:model="mathgrade" class="form-control" id="mathgrade">
																				<option value="">Select Grade</option>
																				@foreach ($gradeOptions as $option)
																								<option value="{{ $option }}">{{ $option }}</option>
																				@endforeach
																</select>
																@error('mathgrade')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												<div class="form-group col-md-6 col-sm-6">
																<label for="eng"><i class="ti-user"></i>Subject</label>
																<input wire:model="eng" id="eng" readonly type="text" class="form-control">

																@error('eng')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>

												<div class="form-group col-md-6 col-sm-6">
																<label for="enggrade"><i class="ti-email"></i> Grade</label>
																<select wire:model="enggrade" class="form-control" id="enggrade">
																				<option value="">Select Grade</option>
																				@foreach ($gradeOptions as $option)
																								<option value="{{ $option }}">{{ $option }}</option>
																				@endforeach
																</select>
																@error('enggrade')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>

												<br />
												<div class="form-group col-md-6 col-sm-6">
																<label for="subject1"><i class="ti-user"></i> {{ 'Subject' }}</label>
																<select wire:model="subject1" class="form-control" id="subject1">
																				<option value="">--Select--</option>
																				@foreach ($subjectOptions as $option)
																								<option value="{{ $option }}">{{ $option }}</option>
																				@endforeach
																				@if ($this->subject1)
																								<option value="{{ $this->subject1 }}" selected>{{ $this->subject1 }}</option>
																				@endif
																</select>
																@error('subject1')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>

												<div class="form-group col-md-6 col-sm-6">
																<label for="grade1"><i class="ti-email"></i> Grade</label>
																<select wire:model="grade1" class="form-control" id="grade1">
																				<option value="">Select Grade</option>
																				@foreach ($gradeOptions as $option)
																								<option value="{{ $option }}">{{ $option }}</option>
																				@endforeach
																</select>
																@error('grade1')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												<br />
												<div class="form-group col-md-6 col-sm-6">
																<label for="subject2"><i class="ti-user"></i> {{ 'Subject' }}</label>
																<select wire:model="subject2" class="form-control" id="subject2">
																				<option value="">--Select--</option>
																				@foreach ($subjectOptions as $option)
																								<option value="{{ $option }}">{{ $option }}</option>
																				@endforeach
																				@if ($this->subject2)
																								<option value="{{ $this->subject2 }}" selected>{{ $this->subject2 }}</option>
																				@endif
																</select>
																@error('subject2')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>

												<div class="form-group col-md-6 col-sm-6">
																<label for="grade2"><i class="ti-email"></i> Grade</label>
																<select wire:model="grade2" class="form-control" id="grade2">
																				<option value="">Select Grade</option>
																				@foreach ($gradeOptions as $option)
																								<option value="{{ $option }}">{{ $option }}</option>
																				@endforeach
																</select>
																@error('grade2')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												<br />
												<div class="form-group col-md-6 col-sm-6">
																<label for="subject3"><i class="ti-user"></i> {{ 'Subject' }}</label>
																<select wire:model="subject3" class="form-control" id="subject3">
																				<option value="">--Select--</option>
																				@foreach ($subjectOptions as $option)
																								<option value="{{ $option }}">{{ $option }}</option>
																				@endforeach
																				@if ($this->subject3)
																								<option value="{{ $this->subject3 }}" selected>{{ $this->subject3 }}</option>
																				@endif
																</select>
																@error('subject1')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												<div class="form-group col-md-6 col-sm-6">
																<label for="grade3"><i class="ti-email"></i> Grade</label>
																<select wire:model="grade3" class="form-control" id="grade3">
																				<option value="">Select Grade</option>
																				@foreach ($gradeOptions as $option)
																								<option value="{{ $option }}">{{ $option }}</option>
																				@endforeach
																</select>
																@error('grade3')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>

								</div>
								<div class="col-md-offset-2 mt-10 text-right">
												@if ($currentStep > 1)
																<button wire:click="previousStep" class="btn btn-primary"> <span
																								class="fa fa-arrow-left"></span>Previous</button>
												@endif

												@if ($currentStep < 3)
																<button wire:click="nextStep" class="btn btn-primary"> Next <span
																								class="fa fa-arrow-right"></span></button>
												@else
																<button wire:click="submitForm" class="btn btn-success">Submit</button>
												@endif
								</div>

				@endif
				@if ($currentStep == 2 && $resultType === 2)
								<div class="row mb-3 mt-5">
												<div class="col card mx-3 mb-5">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="m-2">Basic Information <span>(1)</span></h5>
																</div>
												</div>
												<div class="col card mx-4 mb-5" style="background-color: aliceblue;">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="bold m-2">Result Type <span>(2)</span></h5>
																</div>
												</div>
												<div class="col card mx-3 mb-5">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="m-2">Preview Details <span>(3)</span></h5>
																</div>
												</div>

								</div>
								<div class="col-md-offset-2 mt-10 text-right">

												<button wire:click="previousStep" class="btn btn-primary"> <span
																				class="fa fa-arrow-left"></span>Previous</button>

												@if ($jsceresult)
																<button wire:click="nextStep" class="btn btn-primary"> <span
																								class="fa fa-arrow-right"></span>Next</button>
												@endif
								</div>
								<div class="row">
												<div class="form-group col-md-4">
																<label for="exampleInputName1"><i class="ti-user"></i> JSCE Result</label>
																<input wire:model="jsceresult" type="file" class="form-control" id="exampleInputName1">
																@error('jsceresult')
																				<span style="color: red">{{ $message }}</span>
																@enderror
												</div>
												@if ($jsceresult)
																<div class="col-md-6 mb-4">
																				<div class="card_with_image">
																								<div class="blog_card_image">
																												<a href="javascript:void(0);">
																																<img src="{{ $jsceresult->temporaryUrl() }}" alt="" class="img-responsive">
																												</a>
																								</div>

																				</div>
																</div>
												@endif

								</div>

				@endif
				@if ($currentStep === 3)
								<div class="row mb-3 mt-5">
												<div class="col card mx-3 mb-5">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="m-2">Basic Information <span>(1)</span></h5>
																</div>
												</div>
												<div class="col card mx-4 mb-5">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="bold m-2">Result Type <span>(2)</span></h5>
																</div>
												</div>
												<div class="col card mx-3 mb-5" style="background-color: aliceblue;">
																<div class="row">
																				<span class="ti-marker-alt color-primary m-2" style="color: blue;"></span>
																				<h5 class="m-2">Preview Details <span>(3)</span></h5>
																</div>
												</div>

								</div>
								<h3 class="text-center">Preview Details</h3>
								@if (session('message'))
												<div class="alert alert-success">
																{{ session('message') }}
												</div>
								@endif
								<div class="main-content-inner">
												<div class="profile_page">
																<div class="row">
																				<div class="col-lg-12">
																								<div class="cover-profile">
																												<div class="profile-bg-img" style="background-color:aliceblue;">
																																<div class="card-block user-info">
																																				<div class="col-md-12">
																																								<div class="media-left">
																																												<a href="#" class="profile-image">
																																																@if ($passport)
																																																				<img class="user-img img-radius"
																																																								src="{{ $passport->temporaryUrl() }}" alt="user-img"
																																																								style=" width:200px">
																																																@else
																																																				<img class="user-img img-radius" src="images/ava.png"
																																																								alt="user-img">
																																																@endif
																																																@if ($img)
																																																				<input type="file" class="form-control" wire:model="passport">
																																																@endif

																																												</a>
																																								</div>
																																								
																																								<div class="media-body row">
																																												<div class="col-lg-12">
																																																<div class="user-title">

																																																				<span class="ti-image" wire:click="upload"></span>
																																																</div>
																																												</div>

																																								</div>
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>

																</div>
																@error('passport')
																																												<span style="color: red">{{ $message }}</span>
																																								@enderror
																<div class="row">
																				<div class="col-lg-12">
																								<div class="tab-header card mb-4">
																												<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
																																<li class="nav-item">
																																				<a class="nav-link active" data-toggle="tab" href="#personal" role="tab"
																																								aria-expanded="true">Personal Info</a>
																																				<div class="slide"></div>
																																</li>

																												</ul>
																								</div>
																								<div class="tab-content">
																												<div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="true">
																																<div class="card mb-4">
																																				<div class="card-header">
																																								<h5 class="card_title mb-0">About Me</h5>
																																				</div>
																																				<div class="card-block">
																																								<div class="view-info">
																																												<div class="general-info">
																																																<div class="row">
																																																				<div class="col-lg-12 col-xl-6">
																																																								<div class="table-responsive">
																																																												<table class="m-0 table">
																																																																<tbody>
																																																																				<tr>
																																																																								<th scope="row">Full Name</th>
																																																																								<td>{{ $surname }} {{ $firstname }}
																																																																												{{ $othernames }}</td>
																																																																				</tr>
																																																																				<tr>
																																																																								<th scope="row">Gender</th>
																																																																								<td>{{ $gender }}</td>
																																																																				</tr>
																																																																				<tr>
																																																																								<th scope="row">Birth Date</th>
																																																																								<td>{{ $dob }}</td>
																																																																				</tr>
																																																																				<tr>
																																																																								<th scope="row">Marital Status</th>
																																																																								<td>Single</td>
																																																																				</tr>
																																																																				<tr>
																																																																								<th scope="row">Location</th>
																																																																								<td>{{ $address }}</td>
																																																																				</tr>
																																																																</tbody>
																																																												</table>
																																																								</div>
																																																				</div>
																																																				<div class="col-lg-12 col-xl-6">
																																																								<div class="table-responsive">
																																																												<table class="table">
																																																																<tbody>
																																																																				<tr>
																																																																								<th scope="row">Email</th>
																																																																								<td><a href="#!">{{ $email }}</a>
																																																																								</td>
																																																																				</tr>
																																																																				<tr>
																																																																								<th scope="row">Mobile Number</th>
																																																																								<td>{{ $phone }}</td>
																																																																				</tr>
																																																																				<tr>
																																																																								<th scope="row">State</th>
																																																																								<td>{{ $dis_state->name }}</td>
																																																																				</tr>
																																																																				<tr>
																																																																								<th scope="row">LGA</th>
																																																																								<td>{{ $dis_lga->name }}</td>
																																																																				</tr>
																																																																				{{-- <tr>
																																																																								<th scope="row">Website</th>
																																																																								<td><a href="#!">www.example.com</a></td>
																																																																				</tr> --}}
																																																																</tbody>
																																																												</table>
																																																								</div>
																																																				</div>

																																																</div>

																																												</div>
																																								</div>
																																				</div>

																																</div>

																												</div>

																								</div>
																								@if ($jsceresult)
																												<img class="img-responsive" src="{{ $jsceresult->temporaryUrl() }}" alt="JSCE result">
																								@endif
																								@if ($resultType === 1)
																												<div class="tab-content">
																																<div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="true">
																																				<div class="card mb-4">
																																								<div class="card-header">
																																												<h5 class="card_title mb-0">Result</h5>
																																								</div>
																																								<div class="card-block">
																																												<div class="view-info">
																																																<div class="general-info">
																																																				<div class="row">
																																																								<div class="col-lg-12 col-xl-6">
																																																												<div class="table-responsive">
																																																																<table class="m-0 table">
																																																																				<tbody>
																																																																								<tr>
																																																																												<th scope="row">{{ $maths }}
																																																																												</th>
																																																																												<td>{{ $mathgrade }}</td>
																																																																								</tr>
																																																																								<tr>
																																																																												<th scope="row">{{ $eng }}
																																																																												</th>
																																																																												<td>{{ $enggrade }}</td>
																																																																								</tr>
																																																																								<tr>
																																																																												<th scope="row">{{ $subject1 }}
																																																																												</th>
																																																																												<td>{{ $grade1 }}</td>
																																																																								</tr>
																																																																								<tr>
																																																																												<th scope="row">{{ $subject2 }}
																																																																												</th>
																																																																												<td>{{ $grade2 }}</td>
																																																																								</tr>
																																																																								<tr>
																																																																												<th scope="row">{{ $subject3 }}
																																																																												</th>
																																																																												<td>{{ $grade3 }}</td>
																																																																								</tr>

																																																																				</tbody>
																																																																</table>
																																																												</div>
																																																								</div>

																																																				</div>

																																																</div>
																																												</div>
																																								</div>

																																				</div>

																																</div>

																												</div>
																								@endif

																				</div>
																</div>
												</div>
								</div>

								<div class="col-md-offset-2 text-right">
												@if ($currentStep > 1)
																<button wire:click="previousStep" class="btn btn-primary"> <span
																								class="fa fa-arrow-left"></span>Previous</button>
												@endif

												@if ($currentStep < 3)
																<button wire:click="nextStep" class="btn btn-primary"> Next<span
																								class="fa fa-arrow-right"></span></button>
												@else
																<button wire:click="submitForm" class="btn btn-success">Submit</button>
												@endif
								</div>
				@endif

				<div>
