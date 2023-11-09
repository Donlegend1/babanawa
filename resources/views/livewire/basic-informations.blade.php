<div class="row">


    <div class="col-xl-12 stretched_card margins mt-4">
        	
        <div class="card">
            <div class="card-body marpadd">

                @if ($currentStep === 1)

                    <div class="container my-5">
                        <div class="row justify-content-center">
                            <div class="col-md-3 text-center">
                                <div class="circle active">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Basic Information</h5>
                                <span class="step-number">(Step 1)</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="circle">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Result Type</h5>
                                <span class="step-number">(Step 2)</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="circle">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Preview Details</h5>
                                <span class="step-number">(Step 3)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 1: Basic Information -->
                    <h2 class="fonta text-center">Basic Information</h2>
                    <p class="text-danger ddxx text-center">Note: You are required to complete all input fields below,
                        before the<br> "next" button will
                        become visible to proceed</p>

                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputName1"><i class="ti-user"></i> Surname</label>
                            <input wire:model="surname" type="text" class="form-control" id="exampleInputName1">
                            @error('surname')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputName2"><i class="ti-user"></i> Lastname</label>
                            <input wire:model="firstname" type="text" class="form-control" id="exampleInputName2">
                            @error('firstname')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputName3"><i class="ti-user"></i>Other Names</label>
                            <input wire:model="othernames" type="text" class="form-control" id="exampleInputName3">
                            @error('othernames')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-4">
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

                        <div class="form-group col-md-4">
                            <label for="exampleInputPhone"><i class="ti-mobile"></i> Phone Number</label>
                            <input type="text" wire:model="phone" class="form-control" id="exampleInputPhone">
                            @error('phone')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputDOB1"><i class="ti-user"></i> Date Of Birth</label>
                            <input type="date" wire:model="dob" class="form-control" id="exampleInputDOB1">
                            @error('dob')
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
                        <div class="form-group col-md-4">
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

                        {{-- <div class="form-group col-md-4">
                <label for="exampleInputAddress"><i class="ti-home"></i> Address</label>
                <input type="text" wire:model="address" class="form-control" id="exampleInputEmail1">
                @error('address')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div> --}}
                    </div>

                    <div class="col-md-offset-2 text-right">
                        @if ($currentStep > 1)
                            <button wire:click="previousStep" class="btn btn-primary buttonxx"> <span
                                    class="fa fa-arrow-left"></span> Back</button>
                        @endif

                        @if ($currentStep < 3)
                            <button wire:click="nextStep" class="btn btn-primary buttonxx"> Proceed <span
                                    class="fa fa-arrow-right"></span></button>

                        @else
                            <button onclick="getEmailFromSession()" class="btn btn-success buttonxx"> Submit</button>
                        @endif
                    </div>
                @endif

                @if ($currentStep === 2 && $resultType === 0)
                    <div class="container my-5">
                        <div class="row justify-content-center">
                            <div class="col-md-3 text-center">
                                <div class="circle">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Basic Information</h5>
                                <span class="step-number">(Step 1)</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="circle active">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Result Type</h5>
                                <span class="step-number">(Step 2)</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="circle">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Preview Details</h5>
                                <span class="step-number">(Step 3)</span>
                            </div>
                        </div>
                    </div>

                    <h2 class="fonta text-center">Result Type</h2>
                    <p class="text-danger ddxx text-center">Please select result type from the options below</p>

                    <hr>

                    <div class="d-flex flex-column justify-content-center align-items-center container">
                        <div class="card col-12 col-md-8 col-sm-12 mb-2">
                            <!-- Card 3: NO RESULT -->
                            <div class="hover card card-icon text-left" wire:click="ssce">
                                <div class="newcard">

                                    <div class="whotheyare">SSCE RESULT</div>
                                    <span class="whotheyare2">This option will require you to upload your SSCE
                                        result</span>
                                </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-8 col-sm-12 mb-2">
                            <!-- Card 3: NO RESULT -->
                            <div class="hover card card-icon text-left" wire:click="jsce">
                                <div class="newcard">
                                    <div class="whotheyare">JSCE RESULT</div>
                                    <span class="whotheyare2">This option will require you to upload your JSCE
                                        result</span>
                                </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-8 col-sm-12 mb-2">
                            <!-- Card 3: NO RESULT -->
                            <div class="hover card card-icon text-left" wire:click="noresult">
                                <div class="newcard">

                                    <div class="whotheyare">No RESULT</div>
                                    <span class="whotheyare2">Please click here if you do not have any result</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-offset-2 mt-3 text-right">
                        @if ($currentStep > 1)
                            <button wire:click="previousStep" class="btn btn-primary buttonxx"> <span
                                    class="fa fa-arrow-left"></span> Back</button>
                        @endif

                    </div>
                @endif

                @if ($currentStep == 2 && $resultType === 1)
                    <div class="container my-5">
                        <div class="row justify-content-center">
                            <div class="col-md-3 text-center">
                                <div class="circle">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Basic Information</h5>
                                <span class="step-number">(Step 1)</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="circle active">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Result Type</h5>
                                <span class="step-number">(Step 2)</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="circle">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Preview Details</h5>
                                <span class="step-number">(Step 3)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">

                        <!-- Step 1: Basic Information -->
                        <h2 class="fonta text-center">SSCE Result</h2>
                        <p class="text-danger ddxx text-center">Please complete the form inputs below to continue</p>

                        <hr>
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
                            <button wire:click="previousStep" class="btn btn-primary buttonxx"> <span
                                    class="fa fa-arrow-left"></span> Back</button>
                        @endif

                        @if ($currentStep < 3)
                            <button wire:click="nextStep" class="btn btn-primary buttonxx"> Next <span
                                    class="fa fa-arrow-right"></span></button>
                        @else
                            <button onclick="getEmailFromSession()" class="btn btn-success">Submit</button>
                        @endif
                    </div>

                @endif
                @if ($currentStep == 2 && $resultType === 2)
                    <div class="container my-5">
                        <div class="row justify-content-center">
                            <div class="col-md-3 text-center">
                                <div class="circle">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Basic Information</h5>
                                <span class="step-number">(Step 1)</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="circle active">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Result Type</h5>
                                <span class="step-number">(Step 2)</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="circle">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Preview Details</h5>
                                <span class="step-number">(Step 3)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">

                        <!-- Step 1: Basic Information -->
                        <h2 class="fonta text-center">JSCE Result</h2>
                        <p class="text-danger ddxx text-center">You are required to upload a copy of your <br> Junior
                            Waec result</p>

                        <hr>
                    </div>

                    <div class="row">

                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="form-group col-md-12 aligncenter">

                                        <label for="exampleInputName1"><i class="ti-user"></i> JSCE Result</label>

                                      <div class="form-group col-md-6 col-sm-6">
                                        <label for="jsceresult"><i class="ti-user"></i> JSCE Result</label>
                                        <input wire:model="jsceresult" type="file" accept=".png, .jpg, .jpeg" class="form-control" id="exampleInputName1" wire:change="updatedJsceresult">
                                        <!-- ... (error handling) -->
                                    </div>

                                        @error('jsceresult')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($jsceresult)
                            <div class="col-lg-4 col-sm-12">
                                <div class="image_card">
                                    <div class="card_img_hover">
                                        <div class="card_info">
                                            <svg class="card_clock" viewBox="0 0 24 24">
                                                <path
                                                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                                            </svg>
                                        </div>

                                    </div>
                                    <div class="card_img"
                                        style="background-image: url('{{ $jsceresult->temporaryUrl() }}')"></div>
                                    <a href="#" class="card_link">
                                        <div class="card_img_hover_sec"
                                            style="background-image: url('{{ $jsceresult->temporaryUrl() }}')"></div>
                                    </a>
                                    <div class="card__info">
                                        <h3 class="card_title">Junior Waec result</h3>
                                        <span class="card_by"><a href="#" class="card_author"
                                                title="author">Uploaded</a></span>
                                    </div>
                                </div>
                            </div>


                            {{--  <div class="col-lg-6 col-sm-12 mt-mob-4">
                            <div class="card">
                                <div class="card-body">

                                  
                                        <div class="card_with_image">
                                            <div class="blog_card_image">

                                                <a href="javascript:void(0);">
                                                    <img src="{{ $jsceresult->temporaryUrl() }}" alt=""
                                                        class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="rt_post_data">
                                                <div class="blog_card_date">

                                                    <div class="blog_chat_icon">

                                                    </div>
                                                </div>
                                                <div class="blog_card_description">

                                                </div>
                                            </div>
                                        </div>
                                   

                                </div>
                            </div>
                        </div> --}}
                        @endif

                    </div>

                    <br>
                    <br>

                    <div class="col-md-offset-2 mt-10 text-right">

                        <button wire:click="previousStep" class="btn btn-primary buttonxx"> <span
                                class="fa fa-arrow-left"></span> Previous</button>

                        @if ($jsceresult)
                            <button wire:click="nextStep" class="btn btn-primary buttonxx"> <span
                                    class="fa fa-arrow-right"></span> Proceed</button>
                        @endif
                    </div>

                @endif
                @if ($currentStep === 3)
                    <div class="container my-5">
                        <div class="row justify-content-center">
                            <div class="col-md-3 text-center">
                                <div class="circle">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Basic Information</h5>
                                <span class="step-number">(Step 1)</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="circle">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Result Type</h5>
                                <span class="step-number">(Step 2)</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="circle active">
                                    <span class="ti-marker-alt color-primary"></span>
                                </div>
                                <h5 class="mt-3">Preview Details</h5>
                                <span class="step-number">(Step 3)</span>
                            </div>
                        </div>
                    </div>
                    <h3 class="fonta text-center">Preview Details</h3>
                    <p class="text-center">Please preview your information and proceed to payment </p>
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
                                        <div class="profile-bg-img" style="background-color:#4908FA;">
                                            <div class="card-block user-info">
                                                <div class="col-md-12">

                                                    <div class="media-left">
                                                        <a href="#" class="profile-image">

                                                            @if ($passport)
                                                                <img class="user-img img-radius"
                                                                    src="{{ $passport->temporaryUrl() }}"
                                                                    alt="user-img" style=" width:200px height:200px">
                                                            @else
                                                                <img class="user-img img-radius"
                                                                    src="../../images/ava.png" alt="user-img">
                                                            @endif

                                                        </a>
                                                    </div>

                                                    <div class="avatar-edit">
                                                        {{--  <input class="custom-file-input" type='file'
                                                            wire:model="passport" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label> --}}




                                                                                                    <div class="form-group col-md-6 col-sm-6">
                                                <input type="file" name="file" id="file" class="inputfile" wire:model="passport" accept=".png, .jpg, .jpeg" />
                                                <label for="file" class="alignc">Click here to<br>upload passport</label>
                                                <!-- ... (error handling) -->
                                            </div>






                                                    </div>


                                                    {{--           <div class="media-body row">
                                            <div class="col-lg-12">
                                                <div class="user-title">

                                                    <span class="ti-image" wire:click="upload"></span>

                                                </div>
                                            </div>

                                        </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            @error('passport')
                                {{-- <span style="color: red">{{ $message }}</span> --}}
                            @enderror

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab-header card mb-4">
                                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#personal"
                                                    role="tab" aria-expanded="true">Personal Info</a>
                                                <div class="slide"></div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personal" role="tabpanel"
                                            aria-expanded="true">
                                            <div class="card mb-4">
                                                {{--  <div class="card-header">
                                        <h5 class="card_title mb-0">Basic Information</h5>
                                    </div> --}}
                                                <div class="card-block">
                                                    <div class="view-info">
                                                        <div class="general-info">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="table-responsive">
                                                                        <table class="m-0 table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row"
                                                                                        class="mainfield">Full Name
                                                                                    </th>
                                                                                    <td class="capitalz">
                                                                                        {{ $surname }}
                                                                                        {{ $firstname }}
                                                                                        {{ $othernames }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row"
                                                                                        class="mainfield">Gender</th>
                                                                                    <td class="capitalz">
                                                                                        {{ $gender }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row"
                                                                                        class="mainfield">Birth Date
                                                                                    </th>
                                                                                    <td class="capitalz">
                                                                                        {{ $dob }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row"
                                                                                        class="mainfield">LGA</th>
                                                                                    <td class="capitalz">
                                                                                        {{ $dis_lga->name }}</td>
                                                                                </tr>
                                                                                {{--  <tr>
                                                                        <th scope="row" class="mainfield">Location</th>
                                                                        <td class="capitalz">{{ $address }}</td>
                                                                    </tr> --}}
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row"
                                                                                        class="mainfield">Email</th>
                                                                                    <td class="capitalz"><a
                                                                                            href="#!">{{ $email }}</a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row"
                                                                                        class="mainfield">Mobile Number
                                                                                    </th>
                                                                                    <td class="capitalz">
                                                                                        {{ $phone }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row"
                                                                                        class="mainfield">State</th>
                                                                                    <td class="capitalz">
                                                                                        {{ $dis_state->name }}</td>
                                                                                </tr>
                                                                                {{--  <tr>
                                                                        <th scope="row" class="mainfield">LGA</th>
                                                                        <td class="capitalz">{{ $dis_lga->name }}</td>
                                                                    </tr> --}}
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

									


                                    @if ($resultType !== 3 && $resultType !== 1)


									

                                        <div class="col-lg-4 col-sm-12 mt-mob-4">
										
											


											
												<div class="image_card">
													<div class="card_img_hover">
														<div class="card_info">
															<svg class="card_clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
															</svg><span class="card_date">15 - Dec</span>
														</div>
							
													</div>

													@if ($jsceresult)
													<div class="card_img" style="background-image: url('{{ $jsceresult->temporaryUrl() }}')"></div>
													<a href="#" class="card_link">
														<div class="card_img_hover_sec" style="background-image: url('{{ $jsceresult->temporaryUrl() }}')"></div>
													</a>
													@endif

													<div class="card__info">
														<h3 class="card_title">Junior Waec Result {{$resultType}}</h3>
														<span class="card_by"><a href="#" class="card_author" title="author">Uploaded</a></span>
													</div>
												</div>
											


                                           {{--  <div class="card">
                                                <div class="card-body">

                                                    <div class="card_with_image">
                                                        <div class="blog_card_image">
                                                            @if ($jsceresult)
                                                                <img class="img-responsive"
                                                                    src="{{ $jsceresult->temporaryUrl() }}"
                                                                    alt="JSCE result">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    @endif

                                    @if ($resultType === 1)
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="personal" role="tabpanel"
                                                aria-expanded="true">
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
                                                                                        <th scope="row">
                                                                                            {{ $maths }}
                                                                                        </th>
                                                                                        <td>{{ $mathgrade }}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">
                                                                                            {{ $eng }}
                                                                                        </th>
                                                                                        <td>{{ $enggrade }}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">
                                                                                            {{ $subject1 }}
                                                                                        </th>
                                                                                        <td>{{ $grade1 }}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">
                                                                                            {{ $subject2 }}
                                                                                        </th>
                                                                                        <td>{{ $grade2 }}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">
                                                                                            {{ $subject3 }}
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
                            <button wire:click="previousStep" class="btn btn-primary buttonxx"> <span
                                    class="fa fa-arrow-left"></span> Back</button>
                        @endif

                        @if ($currentStep < 3)
                            <button wire:click="nextStep" class="btn btn-primary buttonxx"> Next<span
                                    class="fa fa-arrow-right"></span></button>
                        @else


						{{-- <button type="submit" class="btn btn-success buttonxx"
						onclick="payWithPaystack()">Proceed</button> --}}
                        

                             <button onclick="getEmailFromSession()" class="btn btn-success buttonxx">
                                Proceed</button> 
                        @endif
                    </div>
                @endif

            </div>
        </div>
    </div>
    <!-- Livewire Component Blade File -->
<div>


    <div>
        {{-- @if ($callPaystackFunction) --}}
            <script src="https://js.paystack.co/v1/inline.js"></script>
            <script>
           
        function getEmailFromSession() {
            $.ajax({
                url: '/get-email-from-session',
                type: 'GET',
                success: function(response) {
                    let email = response.email;

                    let handler = PaystackPop.setup({
                        key: 'pk_test_03a3a21f2c3696adf7531583e4b4348fc2c13324',
                        email: email,
                        amount: {{ $preliamount }} * 100,
                        ref: '' + Math.floor((Math.random() * 1000000000) + 1),
                        callback: function(response) {
                            window.location = "/verifytranx/" + response.reference;
                        }
                    });

                    handler.openIframe();
                }
            });
        }

        getEmailFromSession();

            </script>
        {{-- @endif --}}
    </div>
</div>
