@extends('backend.layouts.app') @section('content')

    <style>
        /* body {font-family: Arial;} */
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        .radio_container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #cecece;
            width: 350px;
            border-radius: 9999px;
            box-shadow: inset 0.5px 0.5px 2px 0 rgba(0, 0, 0, 0.15);
        }

        input[type="radio"] {
            appearance: none;
            display: none;
        }

        .radio_container label {
            font-size: .875rem;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: inherit;
            width: 100px;
            text-align: center;
            border-radius: 9999px;
            overflow: hidden;
            transition: linear 0.3s;
            margin-top: 8px;
        }

        input[type="radio"]:checked+label {
            background-color: #1e90ff;
            color: #f1f3f5;
            font-weight: 900;
            transition: 0.3s;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 20px;
        }
    </style>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        {{ !empty($editData) ? 'Update Member Information' : 'Add Member Information' }}
                    </h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Member Information</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form
                action="{{ !empty($editData) ? route('member_management.update', $editData->id) : route('member_management.store') }}"
                method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="card">
                    @if (empty(auth()->user()->member_id) || in_array(1, auth()->user()->user_role->pluck('role_id')->toArray()) || in_array(2, auth()->user()->user_role->pluck('role_id')->toArray()))
                        <div class="card-header row">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="radio_container" id="type" name="member_type">
                                        <input type="radio" onclick="radio_handle(1)" class="member_type"
                                            name="member_type" id="radio_faculty" value="1"
                                            {{ @$editData->member_type == '1' ? 'checked' : '' }} checked>
                                        <label for="radio_faculty">Faculty</label>
                                        <input type="radio" onclick="radio_handle(2)" class="member_type"
                                            name="member_type" id="radio_office_staff" value="2"
                                            {{ @$editData->member_type == '2' ? 'checked' : '' }}>
                                        <label for="radio_office_staff">Officer/Staff</label>
                                        <input type="radio" onclick="radio_handle(3)" class="member_type"
                                            name="member_type" id="radio_others" value="3"
                                            {{ @$editData->member_type == '3' ? 'checked' : '' }}>
                                        <label for="radio_others">Others</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('member_management.list') }}" class="btn btn-info btn-sm float-right"><i
                                        class="fas fa-stream"></i> View Members Info</a>
                            </div>
                        </div>
                    @endif
                    <div class="tab">
                        <button type="button" class="tablinks active" onclick="openCity(event, 'basic_info')">Basic
                            Info</button>
                        <button type="button" class="tablinks"
                            onclick="openCity(event, 'education_info')">Education</button>
                        <button type="button" class="tablinks" onclick="openCity(event, 'professional_experience')">Job
                            Experience</button>
                        {{-- <button type="button" class="tablinks" onclick="openCity(event, 'administrative_experience')">Administrative Experience</button> --}}
                        <button type="button" class="tablinks optional_tab"
                            onclick="openCity(event, 'area_of_interest')">Research Interest</button>
                        {{-- <button type="button" class="tablinks optional_tab" onclick="openCity(event, 'honor_and_awards')">Honors & Awards</button> --}}
                        {{-- <button type="button" class="tablinks optional_tab" onclick="openCity(event, 'scholarships')">Scholarships & Fellowships</button> --}}
                        {{-- <button type="button" class="tablinks optional_tab" onclick="openCity(event, 'memberships')">Memberships</button> --}}
                        {{-- <button type="button" class="tablinks optional_tab" onclick="openCity(event, 'responsibilities')">Professional Responsibilities</button> --}}
                        {{-- <button type="button" class="tablinks optional_tab" onclick="openCity(event, 'skills')">Skills</button> --}}
                        {{-- <button type="button" class="tablinks optional_tab" onclick="openCity(event, 'projects')">Project Accomplishments</button> --}}
                        {{-- <button type="button" class="tablinks optional_tab" onclick="openCity(event, 'training')">Training Accomplishments</button> --}}
                        {{-- <button type="button" class="tablinks optional_tab" onclick="openCity(event, 'certification')">Certification Accomplishments</button> --}}
                        <button type="button" class="tablinks optional_tab"
                            onclick="openCity(event, 'publish_books')">Publish Books</button>
                        <button type="button" class="tablinks optional_tab"
                            onclick="openCity(event, 'publish_journals')">Publish Journals</button>
                        <button type="button" class="tablinks optional_tab"
                            onclick="openCity(event, 'conference')">Conference Papers</button>
                        {{-- <button type="button" class="tablinks" onclick="openCity(event, 'taught_courses')">Taught Courses</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'languages')">Languages</button>
                    <button type="button" class="tablinks" onclick="openCity(event, 'social_welfares')">Experience on Social Welfare</button> --}}
                        <button type="button" class="tablinks" onclick="openCity(event, 'social_media_link')">Social Media
                            Link</button>
                    </div>
                    <div class="card-body">
                        {{-- <form action="{{ !empty($editData)? route('member_management.update',$editData->id) : route('member_management.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf --}}
                        <div id="basic_info" class="tabcontent">
                            <h4>Basic Info</h4>
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label>Name</label>
                                    <input id="name" type="text"
                                        value="{{ !empty($editData->name) ? $editData->name : @old('name') }}"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        placeholder="Full name with Salutation"> @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-5">
                                    <label>Email</label>
                                    <input id="email" type="text"
                                        value="{{ !empty($editData->email) ? $editData->email : @old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        placeholder="Enter email, use comma for more than one email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Phone</label>
                                    <input id="phone" type="text"
                                        value="{{ !empty($editData->phone) ? $editData->phone : @old('phone') }}"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        placeholder="Enter phone, use comma for more than one phone">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-3" style="margin-top: 35px;">
                                    <div class="form-check" style="margin-left: 5px;">
                                        <input type="checkbox" name="show_phone" class="form-check-input"
                                            id="show_phone" value="1"
                                            {{ @$editData->show_phone == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="show_phone">Show Phone</label>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 d-none">
                                    <label>Designation</label>
                                    <input id="member_designation" type="text"
                                        value="{{ !empty($editData->member_designation) ? $editData->member_designation : @old('member_designation') }}"
                                        class="form-control @error('member_designation') is-invalid @enderror"
                                        name="member_designation" placeholder="Enter Designation">
                                    @error('member_designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Designation</label>
                                    <select id="designation_id" @if (!empty($editData))  @endif
                                        class="form-control form-control-sm select2 @error('designation_id') is-invalid @enderror" name="designation_id">
                                        <option value="" selected>Select Designation</option>
                                    </select>
                                    @error('designation_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Work Place</label>
                                    <input id="work_place" type="text"
                                        value="{{ !empty($editData->work_place) ? $editData->work_place : @old('work_place') }}"
                                        class="form-control @error('work_place') is-invalid @enderror" name="work_place"
                                        placeholder="Enter Work Place"> @error('work_place')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-9">
                                    <label>Image<small style="color: brown"> (Max 2 mb)</small></label>
                                    <input type="file" id="file1"
                                        class="form-control filer_input_single @error('image') is-invalid @enderror"
                                        name="image">
                                        <span role="alert">
                                            <small>{{ __('.jpg, .jpeg, .png file only, pixel size should be 150 px (wide) X 200 px (height)') }}
                                            </small>
                                        </span>
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-3" id="imgDiv">
                                    @if (@$editData->image == null)
                                    <img height="80px" width="60px" src="{{asset('public/frontend/images/about/user-dummy.jpeg')}}" alt="">
                                        @else
                                        <img height="80px" width="60px" src="{{asset('public/upload/members/'.@$editData->image)}}" alt="">
                                        {{-- <button class="deleteRecord" data-id="{{ $editData->id }}" >Delete Record</button> --}}
                                        <a class="btn btn-danger btn-flat btn-sm" id="deleteImage"  data-id="{{ @$editData->id }}"><i class="fas fa-trash"></i></a>
                                    @endif

                                </div>
                                <div class="form-group col-sm-12">
                                    <label>About Member</label>
                                    <textarea id="about" class="form-control @error('about') is-invalid @enderror textarea" name="about">{{ !empty($editData->about) ? $editData->about : @old('about') }}</textarea>
                                    @error('about')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div id="social_media_link" class="tabcontent">
                            <h4>Social Media Link</h4>
                            {{-- @php
                            $latest_member_id = DB::table('members')->orderBy('id','DESC')->first()->id;
                        @endphp --}}
                            <input name="member_id" type="hidden" value="{{ !empty($editData) ? $editData->id : '' }}">
                            <div class="form-row">
                                <div class="form-group col-sm-4" style="display: none">
                                    <label>Facebook Link</label>
                                    <input id="facebook" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->facebook) ? $editDataSocialMediaLink->facebook : @old('facebook') }}"
                                        class="form-control @error('facebook') is-invalid @enderror" name="facebook"
                                        placeholder="Enter Facebook Link"> @error('facebook')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Linkedin Link</label>
                                    <input id="linkedin" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->linkedin) ? $editDataSocialMediaLink->linkedin : @old('linkedin') }}"
                                        class="form-control @error('linkedin') is-invalid @enderror" name="linkedin"
                                        placeholder="Enter Linkedin Link"> @error('linkedin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4" style="display: none">
                                    <label>Twitter Link</label>
                                    <input id="twitter" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->twitter) ? $editDataSocialMediaLink->twitter : @old('twitter') }}"
                                        class="form-control @error('twitter') is-invalid @enderror" name="twitter"
                                        placeholder="Enter Twitter Link"> @error('twitter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4" style="display: none">
                                    <label>Skype Link</label>
                                    <input id="skype" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->skype) ? $editDataSocialMediaLink->skype : @old('skype') }}"
                                        class="form-control @error('skype') is-invalid @enderror" name="skype"
                                        placeholder="Enter Skype Link"> @error('skype')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4" style="display: none">
                                    <label>Whatsapp Link</label>
                                    <input id="whatsapp" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->whatsapp) ? $editDataSocialMediaLink->whatsapp : @old('whatsapp') }}"
                                        class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp"
                                        placeholder="Enter Whatsapp Link"> @error('whatsapp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4" style="display: none">
                                    <label>Instagram Link</label>
                                    <input id="instagram" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->instagram) ? $editDataSocialMediaLink->instagram : @old('instagram') }}"
                                        class="form-control @error('instagram') is-invalid @enderror" name="instagram"
                                        placeholder="Enter Instagram Link"> @error('instagram')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4" style="display: none">
                                    <label>Pinterest Link</label>
                                    <input id="pinterest" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->pinterest) ? $editDataSocialMediaLink->pinterest : @old('pinterest') }}"
                                        class="form-control @error('pinterest') is-invalid @enderror" name="pinterest"
                                        placeholder="Enter Pinterest Link"> @error('pinterest')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Google Scholar Link</label>
                                    <input id="google_scholar" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->google_scholar) ? $editDataSocialMediaLink->google_scholar : @old('google_scholar') }}"
                                        class="form-control @error('google_scholar') is-invalid @enderror"
                                        name="google_scholar" placeholder="Enter Google Scholar Link">
                                    @error('google_scholar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Research Gate Link</label>
                                    <input id="research_gate" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->research_gate) ? $editDataSocialMediaLink->research_gate : @old('research_gate') }}"
                                        class="form-control @error('research_gate') is-invalid @enderror"
                                        name="research_gate" placeholder="Enter Research Gate Link">
                                    @error('research_gate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Website Link</label>
                                    <input id="publons" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->publons) ? $editDataSocialMediaLink->publons : @old('publons') }}"
                                        class="form-control @error('publons') is-invalid @enderror" name="publons"
                                        placeholder="Enter Website Link"> @error('publons')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Orcid Link</label>
                                    <input id="orcid" type="url"
                                        value="{{ !empty($editDataSocialMediaLink->orcid) ? $editDataSocialMediaLink->orcid : @old('orcid') }}"
                                        class="form-control @error('orcid') is-invalid @enderror" name="orcid"
                                        placeholder="Enter Orcid Link"> @error('orcid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div id="education_info" class="tabcontent">
                            <h4>Education</h4>
                            @if (!empty($editDataEducations))
                                @foreach ($editDataEducations as $key => $editDataEducation)
                                    <div class="form-row" id="add_education_extra_div">
                                        <div class="row remove_education_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-4">
                                                        <label>Degree</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataEducation->id) ? $editDataEducation->id : '' }}"
                                                            name="education_id[{{ $key }}]">
                                                        <input type="text"
                                                            value="{{ !empty($editDataEducation->degree) ? $editDataEducation->degree : '' }}"
                                                            class="form-control @error('degree') is-invalid @enderror"
                                                            name="degree[{{ $key }}]" placeholder="">
                                                        @error('degree')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label>Subject</label>
                                                        <input type="text"
                                                            value="{{ !empty($editDataEducation->subject) ? $editDataEducation->subject : '' }}"
                                                            class="form-control @error('subject') is-invalid @enderror"
                                                            name="subject[{{ $key }}]" placeholder="">
                                                        @error('subject')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    {{-- <div class="form-group col-sm-2">
                                                        <label>From Year</label>
                                                        <select class="form-control"
                                                            name="education_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option @if (!empty($editDataEducation->education_year) && $editDataEducation->education_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('education_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div> --}}
                                                    <div class="form-group col-sm-4">
                                                        <label>Year</label>
                                                        <select class="form-control"
                                                            name="education_to_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option @if (!empty($editDataEducation->education_to_year) && $editDataEducation->education_to_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('education_to_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Institution</label>
                                                        <input type="text"
                                                            value="{{ !empty($editDataEducation->education_institution) ? $editDataEducation->education_institution : '' }}"
                                                            class="form-control @error('education_institution') is-invalid @enderror"
                                                            name="education_institution[{{ $key }}]"
                                                            placeholder="">
                                                        @error('education_institution')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Country</label>
                                                        <input type="text"
                                                            value="{{ !empty($editDataEducation->education_country) ? $editDataEducation->education_country : '' }}"
                                                            class="form-control @error('education_country') is-invalid @enderror"
                                                            name="education_country[{{ $key }}]" placeholder="">
                                                        @error('education_country')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"endif
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_member_education', $editDataEducation->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i class="btn btn-info fa fa-plus-circle add_education_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataEducations) || count($editDataEducations) == 0)
                                <div class="form-row" id="add_education_extra_div">
                                    <div class="row remove_education_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-4">
                                                    <label>Degree</label>
                                                    <input type="text" value=""
                                                        class="form-control @error('degree') is-invalid @enderror"
                                                        name="degree[5000]" placeholder=""> @error('degree')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Subject</label>
                                                    <input type="text" value=""
                                                        class="form-control @error('subject') is-invalid @enderror"
                                                        name="subject[5000]" placeholder="">
                                                    @error('subject')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                {{-- <div class="form-group col-sm-2">
                                                    <label>From Year</label>
                                                    <select class="form-control" name="education_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('education_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}
                                                <div class="form-group col-sm-4">
                                                    <label>Year</label>
                                                    <select class="form-control" name="education_to_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataEducation->education_to_year) && $editDataEducation->education_to_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                    @error('education_to_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Institution</label>
                                                    <input type="text" value=""
                                                        class="form-control @error('education_institution') is-invalid @enderror"
                                                        name="education_institution[5000]" placeholder="">
                                                    @error('education_institution')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Country</label>
                                                    <input type="text" value=""
                                                        class="form-control @error('education_country') is-invalid @enderror"
                                                        name="education_country[5000]" placeholder="">
                                                    @error('education_country')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_education_extra"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            @endif
                            <div class="form-row" id="extra_education_div_here"></div>
                        </div>
                        <div id="professional_experience" class="tabcontent">
                            <h4 style="margin-top: 3%;">Professional Experience</h4>
                            @if (!empty($editDataExperiences))
                                @foreach ($editDataExperiences as $key => $editDataExperience)
                                    <div class="form-row" id="add_experience_extra_div">
                                        <div class="row remove_experience_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-4">
                                                        <label>Designation</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataExperience->id) ? $editDataExperience->id : '' }}"
                                                            name="experience_id[{{ $key }}]">
                                                        <input id="designation" type="text"
                                                            value="{{ !empty($editDataExperience->designation) ? $editDataExperience->designation : @old('designation') }}"
                                                            class="form-control @error('designation') is-invalid @enderror"
                                                            name="designation[{{ $key }}]" placeholder="">
                                                        @error('designation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label>Institution</label>
                                                        <input id="experience_institution" type="text"
                                                            value="{{ !empty($editDataExperience->experience_institution) ? $editDataExperience->experience_institution : @old('experience_institution') }}"
                                                            class="form-control @error('experience_institution') is-invalid @enderror"
                                                            name="experience_institution[{{ $key }}]"
                                                            placeholder="">
                                                        @error('experience_institution')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label>Country</label>
                                                        <input id="experience_country" type="text"
                                                            value="{{ !empty($editDataExperience->experience_country) ? $editDataExperience->experience_country : @old('experience_country') }}"
                                                            class="form-control @error('experience_country') is-invalid @enderror"
                                                            name="experience_country[{{ $key }}]"
                                                            placeholder="">
                                                        @error('experience_country')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>From</label>
                                                        <select class="form-control col-sm-12"
                                                            name="experience_from_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) &&
                                                                $editDataExperience->experience_from_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) &&
                                                                $editDataExperience->experience_from_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) &&
                                                                $editDataExperience->experience_from_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) &&
                                                                $editDataExperience->experience_from_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) &&
                                                                $editDataExperience->experience_from_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataExperience->experience_from_month) &&
                                                                $editDataExperience->experience_from_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('experience_from_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="experience_from_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option @if (!empty($editDataExperience->experience_from_year) && $editDataExperience->experience_from_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('experience_from_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>To</label>
                                                        <select class="form-control col-sm-12"
                                                            name="experience_to_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('experience_to_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="experience_to_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option @if (!empty($editDataExperience->experience_to_year) && $editDataExperience->experience_to_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('experience_to_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_member_experience', $editDataExperience->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i class="btn btn-info fa fa-plus-circle add_experience_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataExperiences) || count($editDataExperiences) == 0)
                                <div class="form-row" id="add_experience_extra_div">
                                    <div class="row remove_experience_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-4">
                                                    <label>Designation</label>
                                                    <input id="designation" type="text"
                                                        value="{{ !empty($editDataExperience->designation) ? $editDataExperience->designation : @old('designation')[5000] }}"
                                                        class="form-control @error('designation') is-invalid @enderror"
                                                        name="designation[5000]" placeholder=""> @error('designation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Institution</label>
                                                    <input id="experience_institution" type="text"
                                                        value="{{ !empty($editDataExperience->experience_institution) ? $editDataExperience->experience_institution : @old('experience_institution')[5000] }}"
                                                        class="form-control @error('experience_institution') is-invalid @enderror"
                                                        name="experience_institution[5000]" placeholder="">
                                                    @error('experience_institution')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Country</label>
                                                    <input id="experience_country" type="text"
                                                        value="{{ !empty($editDataExperience->experience_country) ? $editDataExperience->experience_country : @old('experience_country')[5000] }}"
                                                        class="form-control @error('experience_country') is-invalid @enderror"
                                                        name="experience_country[5000]" placeholder="">
                                                    @error('experience_country')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>From</label>
                                                    <select class="form-control col-sm-12"
                                                        name="experience_from_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) &&
                                                            $editDataExperience->experience_from_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) &&
                                                            $editDataExperience->experience_from_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) && $editDataExperience->experience_from_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) &&
                                                            $editDataExperience->experience_from_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) &&
                                                            $editDataExperience->experience_from_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) &&
                                                            $editDataExperience->experience_from_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataExperience->experience_from_month) &&
                                                            $editDataExperience->experience_from_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('experience_from_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12"
                                                        name="experience_from_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataExperience->experience_from_year) && $editDataExperience->experience_from_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('experience_from_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>To</label>
                                                    <select class="form-control col-sm-12"
                                                        name="experience_to_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataExperience->experience_to_month) && $editDataExperience->experience_to_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('experience_to_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12"
                                                        name="experience_to_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataExperience->experience_to_year) && $editDataExperience->experience_to_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('experience_to_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_experience_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="form-row" id="extra_experience_div_here"></div>
                        </div>
                        <div id="administrative_experience" class="tabcontent">
                            <h4 style="margin-top: 3%;">Administrative Experience</h4>
                            @if (!empty($editDataAdministratives))
                                @foreach ($editDataAdministratives as $key => $editDataAdministrative)
                                    <div class="form-row" id="add_administrative_extra_div">
                                        <div class="row remove_administrative_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label>Designation</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataAdministrative->id) ? $editDataAdministrative->id : '' }}"
                                                            name="administrative_id[{{ $key }}]">
                                                        <input id="administrative_designation" type="text"
                                                            value="{{ !empty($editDataAdministrative->administrative_designation) ? $editDataAdministrative->administrative_designation : @old('administrative_designation')[$key] }}"
                                                            class="form-control @error('administrative_designation') is-invalid @enderror"
                                                            name="administrative_designation[{{ $key }}]"
                                                            placeholder=""> @error('administrative_designation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Department & Details</label>
                                                        <input id="administrative_details" type="text"
                                                            value="{{ !empty($editDataAdministrative->administrative_details) ? $editDataAdministrative->administrative_details : @old('administrative_details')[$key] }}"
                                                            class="form-control @error('administrative_details') is-invalid @enderror"
                                                            name="administrative_details[{{ $key }}]"
                                                            placeholder=""> @error('administrative_details')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>From</label>
                                                        <select class="form-control col-sm-12"
                                                            name="administrative_from_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                                $editDataAdministrative->administrative_from_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('administrative_from_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="administrative_from_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option @if (!empty($editDataAdministrative->administrative_from_year) &&
                                                                    $editDataAdministrative->administrative_from_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('administrative_from_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>To</label>
                                                        <select class="form-control col-sm-12"
                                                            name="administrative_to_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                                $editDataAdministrative->administrative_to_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('administrative_to_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="administrative_to_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option @if (!empty($editDataAdministrative->administrative_to_year) &&
                                                                    $editDataAdministrative->administrative_to_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('administrative_to_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_member_administrative', $editDataAdministrative->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i class="btn btn-info fa fa-plus-circle add_administrative_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataAdministratives) || count($editDataAdministratives) == 0)
                                <div class="form-row" id="add_administrative_extra_div">
                                    <div class="row remove_administrative_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Designation</label>
                                                    <input id="administrative_designation" type="text"
                                                        value="{{ !empty($editDataAdministrative->administrative_designation) ? $editDataAdministrative->administrative_designation : @old('administrative_designation')[5000] }}"
                                                        class="form-control @error('administrative_designation') is-invalid @enderror"
                                                        name="administrative_designation[5000]" placeholder="">
                                                    @error('administrative_designation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Department & Details</label>
                                                    <input id="administrative_details" type="text"
                                                        value="{{ !empty($editDataAdministrative->administrative_details) ? $editDataAdministrative->administrative_details : @old('administrative_details')[5000] }}"
                                                        class="form-control @error('administrative_details') is-invalid @enderror"
                                                        name="administrative_details[5000]" placeholder="">
                                                    @error('administrative_details')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>From</label>
                                                    <select class="form-control col-sm-12"
                                                        name="administrative_from_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_from_month) &&
                                                            $editDataAdministrative->administrative_from_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('administrative_from_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12"
                                                        name="administrative_from_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataAdministrative->administrative_from_year) &&
                                                                $editDataAdministrative->administrative_from_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('administrative_from_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>To</label>
                                                    <select class="form-control col-sm-12"
                                                        name="administrative_to_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataAdministrative->administrative_to_month) &&
                                                            $editDataAdministrative->administrative_to_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('administrative_to_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12"
                                                        name="administrative_to_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataAdministrative->administrative_to_year) &&
                                                                $editDataAdministrative->administrative_to_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('administrative_to_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_administrative_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="form-row" id="extra_administrative_div_here"></div>
                        </div>
                        <div id="area_of_interest" class="tabcontent">
                            <h4 style="margin-top: 3%;">Areas of Interest</h4>

                            @if (!empty($editDataInterestAreas))
                                @foreach ($editDataInterestAreas as $key => $editDataInterestArea)
                                    <div class="" id="add_area_of_interest_extra_div">
                                        <div class="row remove_area_of_interest_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-12">
                                                        <label>Area of Interest</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataInterestArea->id) ? $editDataInterestArea->id : '' }}"
                                                            name="interest_area_id[{{ $key }}]">
                                                        <input id="interest_area" type="text"
                                                            value="{{ !empty($editDataInterestArea->interest_area) ? $editDataInterestArea->interest_area : @old('interest_area')[$key] }}"
                                                            class="form-control @error('interest_area') is-invalid @enderror"
                                                            name="interest_area[{{ $key }}]" placeholder="">
                                                        @error('interest_area')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_member_interest_area', $editDataInterestArea->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i
                                                        class="btn btn-info fa fa-plus-circle add_area_of_interest_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataInterestAreas) || count($editDataInterestAreas) == 0)
                                <div class="" id="add_area_of_interest_extra_div">
                                    <div class="row remove_area_of_interest_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Area of Interest</label>
                                                    <input id="interest_area" type="text"
                                                        value="{{ !empty($editDataInterestArea->interest_area) ? $editDataInterestArea->interest_area : @old('interest_area')[5000] }}"
                                                        class="form-control @error('interest_area') is-invalid @enderror"
                                                        name="interest_area[5000]" placeholder=""> @error('interest_area')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_area_of_interest_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_area_of_interest_div_here"></div>
                        </div>
                        <div id="honor_and_awards" class="tabcontent">
                            <h4 style="margin-top: 3%;">Honors & Awards</h4>
                            @if (!empty($editDataHonorAndAwards))
                                @foreach ($editDataHonorAndAwards as $key => $editDataHonorAndAward)
                                    <div class="" id="add_honor_and_awards_extra_div">
                                        <div class="row remove_honor_and_awards_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label>Award Title</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataHonorAndAward->id) ? $editDataHonorAndAward->id : '' }}"
                                                            name="honor_and_awards_id[{{ $key }}]">
                                                        <input id="award_title" type="text"
                                                            value="{{ !empty($editDataHonorAndAward->award_title) ? $editDataHonorAndAward->award_title : @old('award_title')[$key] }}"
                                                            class="form-control @error('award_title') is-invalid @enderror"
                                                            name="award_title[{{ $key }}]" placeholder="">
                                                        @error('award_title')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>Awarded Month</label>
                                                        <select class="form-control col-sm-12"
                                                            name="awarded_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('awarded_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="awarded_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataHonorAndAward->awarded_year) && $editDataHonorAndAward->awarded_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('awarded_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>Award Description</label>
                                                        <textarea name="award_description[{{ $key }}]"
                                                            class="form-control @error('award_description') is-invalid @enderror" placeholder="">{{ !empty($editDataHonorAndAward->award_description) ? $editDataHonorAndAward->award_description : @old('award_description')[$key] }}</textarea>
                                                        @error('award_description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_honor_and_awards', $editDataHonorAndAward->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i
                                                        class="btn btn-info fa fa-plus-circle add_honor_and_awards_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataHonorAndAwards) || count($editDataHonorAndAwards) == 0)
                                <div class="" id="add_honor_and_awards_extra_div">
                                    <div class="row remove_honor_and_awards_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Award Title</label>
                                                    <input id="award_title" type="text"
                                                        value="{{ !empty($editDataHonorAndAward->award_title) ? $editDataHonorAndAward->award_title : @old('award_title')[5000] }}"
                                                        class="form-control @error('award_title') is-invalid @enderror"
                                                        name="award_title[5000]" placeholder=""> @error('award_title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>Awarded Month</label>
                                                    <select class="form-control col-sm-12" name="awarded_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataHonorAndAward->awarded_month) && $editDataHonorAndAward->awarded_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('awarded_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>Awarded Year</label>
                                                    <select class="form-control col-sm-12" name="awarded_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataHonorAndAward->awarded_year) && $editDataHonorAndAward->awarded_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('awarded_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <label>Award Description</label>
                                                    <textarea name="award_description[5000]" class="form-control @error('award_description') is-invalid @enderror"
                                                        placeholder="">{{ !empty($editDataHonorAndAward->award_description) ? $editDataHonorAndAward->award_description : @old('award_description')[5000] }}</textarea>
                                                    @error('award_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_honor_and_awards_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_honor_and_awards_div_here"></div>
                        </div>
                        <div id="scholarships" class="tabcontent">
                            <h4 style="margin-top: 3%;">Scholarships & Fellowships</h4>
                            @if (!empty($editDataScholarships))
                                @foreach ($editDataScholarships as $key => $editDataScholarship)
                                    <div class="" id="add_sholarships_extra_div">
                                        <div class="row remove_sholarships_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label>Scholarship Title</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataScholarship->id) ? $editDataScholarship->id : '' }}"
                                                            name="scholarships_id[{{ $key }}]">
                                                        <input id="scholarship_title" type="text"
                                                            value="{{ !empty($editDataScholarship->scholarship_title) ? $editDataScholarship->scholarship_title : @old('scholarship_title')[$key] }}"
                                                            class="form-control @error('scholarship_title') is-invalid @enderror"
                                                            name="scholarship_title[{{ $key }}]"
                                                            placeholder=""> @error('scholarship_title')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>Scholarship Month</label>
                                                        <select class="form-control col-sm-12"
                                                            name="scholarship_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('scholarship_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="scholarship_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataScholarship->scholarship_year) && $editDataScholarship->scholarship_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('scholarship_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Scholarship From</label>
                                                        <input id="scholarship_from" type="text"
                                                            value="{{ !empty($editDataScholarship->scholarship_from) ? $editDataScholarship->scholarship_from : @old('scholarship_from')[$key] }}"
                                                            class="form-control @error('scholarship_from') is-invalid @enderror"
                                                            name="scholarship_from[{{ $key }}]" placeholder="">
                                                        @error('scholarship_from')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Scholarship Description</label>
                                                        <textarea name="scholarship_description[{{ $key }}]"
                                                            class="form-control @error('scholarship_description') is-invalid @enderror" placeholder="">{{ !empty($editDataScholarship->scholarship_description) ? $editDataScholarship->scholarship_description : @old('scholarship_description')[$key] }}</textarea>
                                                        @error('scholarship_description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_scholarships', $editDataScholarship->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i class="btn btn-info fa fa-plus-circle add_scholarships_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataScholarships) || count($editDataScholarships) == 0)
                                <div class="" id="add_scholarships_extra_div">
                                    <div class="row remove_scholarships_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Scholarship Title</label>
                                                    <input id="scholarship_title" type="text"
                                                        value="{{ !empty($editDataScholarship->scholarship_title) ? $editDataScholarship->scholarship_title : @old('scholarship_title')[5000] }}"
                                                        class="form-control @error('scholarship_title') is-invalid @enderror"
                                                        name="scholarship_title[5000]" placeholder="">
                                                    @error('scholarship_title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>Scholarship Month</label>
                                                    <select class="form-control col-sm-12" name="scholarship_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataScholarship->scholarship_month) && $editDataScholarship->scholarship_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('scholarship_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>Scholarship Year</label>
                                                    <select class="form-control col-sm-12"
                                                        name="scholarship_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataScholarship->scholarship_year) && $editDataScholarship->scholarship_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('scholarship_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Scholarship From</label>
                                                    <input id="scholarship_from" type="text"
                                                        value="{{ !empty($editDataScholarship->scholarship_from) ? $editDataScholarship->scholarship_from : @old('scholarship_from')[5000] }}"
                                                        class="form-control @error('scholarship_from') is-invalid @enderror"
                                                        name="scholarship_from[5000]" placeholder="">
                                                    @error('scholarship_from')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Scholarship Description</label>
                                                    <textarea name="scholarship_description[5000]"
                                                        class="form-control @error('scholarship_description') is-invalid @enderror" placeholder="">{{ !empty($editDataScholarship->scholarship_description) ? $editDataScholarship->scholarship_description : @old('scholarship_description')[5000] }}</textarea>
                                                    @error('scholarship_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_scholarships_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_scholarships_div_here"></div>
                        </div>
                        <div id="memberships" class="tabcontent">
                            <h4 style="margin-top: 3%;">Membership</h4>
                            @if (!empty($editDataMemberships))
                                @foreach ($editDataMemberships as $key => $editDataMembership)
                                    <div class="form-row" id="add_membership_extra_div">
                                        <div class="row remove_membership_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label>Membership Title</label>
                                                        <input id="membership_title" type="text"
                                                            value="{{ !empty($editDataMembership->membership_title) ? $editDataMembership->membership_title : @old('membership_title')[$key] }}"
                                                            class="form-control @error('membership_title') is-invalid @enderror"
                                                            name="membership_title[{{ $key }}]"
                                                            placeholder=""> @error('membership_title')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Membership Type</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataMembership->id) ? $editDataMembership->id : '' }}"
                                                            name="membership_id[{{ $key }}]">
                                                        <input id="membership_type" type="text"
                                                            value="{{ !empty($editDataMembership->membership_type) ? $editDataMembership->membership_type : @old('membership_type')[$key] }}"
                                                            class="form-control @error('membership_type') is-invalid @enderror"
                                                            name="membership_type[{{ $key }}]"
                                                            placeholder="">
                                                        @error('membership_type')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>From</label>
                                                        <select class="form-control col-sm-12"
                                                            name="membership_from_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) &&
                                                                $editDataMembership->membership_from_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) &&
                                                                $editDataMembership->membership_from_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) && $editDataMembership->membership_from_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) && $editDataMembership->membership_from_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) && $editDataMembership->membership_from_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) && $editDataMembership->membership_from_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) && $editDataMembership->membership_from_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) && $editDataMembership->membership_from_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) &&
                                                                $editDataMembership->membership_from_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) &&
                                                                $editDataMembership->membership_from_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) &&
                                                                $editDataMembership->membership_from_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataMembership->membership_from_month) &&
                                                                $editDataMembership->membership_from_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('membership_from_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="membership_from_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataMembership->membership_from_year) && $editDataMembership->membership_from_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('membership_from_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>To</label>
                                                        <select class="form-control col-sm-12"
                                                            name="membership_to_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataMembership->membership_to_month) && $editDataMembership->membership_to_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('membership_to_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="membership_to_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataMembership->membership_to_year) && $editDataMembership->membership_to_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('membership_to_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_member_membership', $editDataMembership->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i class="btn btn-info fa fa-plus-circle add_membership_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataMemberships) || count($editDataMemberships) == 0)
                                <div class="form-row" id="add_membership_extra_div">
                                    <div class="row remove_membership_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">

                                                <div class="form-group col-sm-6">
                                                    <label>Membership Title</label>
                                                    <input id="membership_title" type="text"
                                                        value="{{ !empty($editDataMembership->membership_title) ? $editDataMembership->membership_title : @old('membership_title')[5000] }}"
                                                        class="form-control @error('membership_title') is-invalid @enderror"
                                                        name="membership_title[5000]" placeholder="">
                                                    @error('membership_title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Membership Type</label>
                                                    <input id="membership_type" type="text"
                                                        value="{{ !empty($editDataMembership->membership_type) ? $editDataMembership->membership_type : @old('membership_type')[5000] }}"
                                                        class="form-control @error('membership_type') is-invalid @enderror"
                                                        name="membership_type[5000]" placeholder="">
                                                    @error('membership_type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>From</label>
                                                    <select class="form-control col-sm-12"
                                                        name="membership_from_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) &&
                                                            $editDataExperience->membership_from_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) &&
                                                            $editDataExperience->membership_from_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) && $editDataExperience->membership_from_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) && $editDataExperience->membership_from_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) && $editDataExperience->membership_from_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) && $editDataExperience->membership_from_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) && $editDataExperience->membership_from_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) && $editDataExperience->membership_from_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) &&
                                                            $editDataExperience->membership_from_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) &&
                                                            $editDataExperience->membership_from_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) &&
                                                            $editDataExperience->membership_from_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataExperience->membership_from_month) &&
                                                            $editDataExperience->membership_from_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('membership_from_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12"
                                                        name="membership_from_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataExperience->membership_from_year) && $editDataExperience->membership_from_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('membership_from_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>To</label>
                                                    <select class="form-control col-sm-12"
                                                        name="membership_to_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataExperience->membership_to_month) && $editDataExperience->membership_to_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('membership_to_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12"
                                                        name="membership_to_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataExperience->membership_to_year) && $editDataExperience->membership_to_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('membership_to_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_membership_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="form-row" id="extra_membership_div_here"></div>
                        </div>
                        <div id="responsibilities" class="tabcontent">
                            <h4 style="margin-top: 3%;">Professional Responsibilities</h4>
                            @if (!empty($editDataResponsibilities))
                                @foreach ($editDataResponsibilities as $key => $editDataResponsibility)
                                    <div class="" id="add_responsibilities_extra_div">
                                        <div class="row remove_responsibilities_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label>Designation</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataResponsibility->id) ? $editDataResponsibility->id : '' }}"
                                                            name="responsibilities_id[{{ $key }}]">
                                                        <input id="responsibilities_designation" type="text"
                                                            value="{{ !empty($editDataResponsibility->responsibilities_designation) ? $editDataResponsibility->responsibilities_designation : @old('responsibilities_designation')[$key] }}"
                                                            class="form-control @error('responsibilities_designation') is-invalid @enderror"
                                                            name="responsibilities_designation[{{ $key }}]"
                                                            placeholder=""> @error('responsibilities_designation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>URL Link</label>
                                                        <input id="responsibilities_url_link" type="url"
                                                            value="{{ !empty($editDataResponsibility->responsibilities_url_link) ? $editDataResponsibility->responsibilities_url_link : @old('responsibilities_url_link')[$key] }}"
                                                            class="form-control @error('responsibilities_url_link') is-invalid @enderror"
                                                            name="responsibilities_url_link[{{ $key }}]"
                                                            placeholder=""> @error('responsibilities_url_link')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Organization/Institute Name</label>
                                                        <input id="responsibilities_organization_name" type="text"
                                                            value="{{ !empty($editDataResponsibility->responsibilities_organization_name) ? $editDataResponsibility->responsibilities_organization_name : @old('responsibilities_organization_name')[$key] }}"
                                                            class="form-control @error('responsibilities_organization_name') is-invalid @enderror"
                                                            name="responsibilities_organization_name[{{ $key }}]"
                                                            placeholder=""> @error('responsibilities_organization_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>From Year</label>
                                                        <select class="form-control col-sm-12"
                                                            name="responsibilities_from_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataResponsibility->responsibilities_from_year) &&
                                                                        $editDataResponsibility->responsibilities_from_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('responsibilities_from_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>To Year</label>
                                                        <select class="form-control col-sm-12"
                                                            name="responsibilities_to_year[{{ $key }}]">
                                                            <option value="">Present</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataResponsibility->responsibilities_to_year) &&
                                                                        $editDataResponsibility->responsibilities_to_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('responsibilities_to_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_responsibilities', $editDataResponsibility->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i
                                                        class="btn btn-info fa fa-plus-circle add_responsibilities_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataResponsibilities) || count($editDataResponsibilities) == 0)
                                <div class="" id="add_responsibilities_extra_div">
                                    <div class="row remove_responsibilities_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Designation</label>
                                                    <input id="responsibilities_designation" type="text"
                                                        value="{{ !empty($editDataResponsibility->responsibilities_designation) ? $editDataResponsibility->responsibilities_designation : @old('responsibilities_designation')[5000] }}"
                                                        class="form-control @error('responsibilities_designation') is-invalid @enderror"
                                                        name="responsibilities_designation[5000]" placeholder="">
                                                    @error('responsibilities_designation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>URL Link</label>
                                                    <input id="responsibilities_url_link" type="url"
                                                        value="{{ !empty($editDataResponsibility->responsibilities_url_link) ? $editDataResponsibility->responsibilities_url_link : @old('responsibilities_url_link')[5000] }}"
                                                        class="form-control @error('responsibilities_url_link') is-invalid @enderror"
                                                        name="responsibilities_url_link[5000]" placeholder="">
                                                    @error('responsibilities_url_link')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Organization/Institute Name</label>
                                                    <input id="responsibilities_organization_name" type="text"
                                                        value="{{ !empty($editDataResponsibility->responsibilities_organization_name) ? $editDataResponsibility->responsibilities_organization_name : @old('responsibilities_organization_name')[5000] }}"
                                                        class="form-control @error('responsibilities_organization_name') is-invalid @enderror"
                                                        name="responsibilities_organization_name[5000]" placeholder="">
                                                    @error('responsibilities_organization_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>From Year</label>
                                                    <select class="form-control col-sm-12"
                                                        name="responsibilities_from_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataResponsibility->responsibilities_from_year) &&
                                                                $editDataResponsibility->responsibilities_from_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('responsibilities_from_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>To Year</label>
                                                    <select class="form-control col-sm-12"
                                                        name="responsibilities_to_year[5000]">
                                                        <option value="">Present</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataResponsibility->responsibilities_to_year) &&
                                                                $editDataResponsibility->responsibilities_to_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('responsibilities_to_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_responsibilities_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_responsibilities_div_here"></div>
                        </div>
                        <div id="skills" class="tabcontent">
                            <h4 style="margin-top: 3%;">Skills</h4>

                            @if (!empty($editDataSkills))
                                @foreach ($editDataSkills as $key => $editDataSkill)
                                    <div class="" id="add_skills_extra_div">
                                        <div class="row remove_skills_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-12">
                                                        <label>Skill</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataSkill->id) ? $editDataSkill->id : '' }}"
                                                            name="skill_id[{{ $key }}]">
                                                        <input id="skill" type="text"
                                                            value="{{ !empty($editDataSkill->skill) ? $editDataSkill->skill : @old('skill')[$key] }}"
                                                            class="form-control @error('skill') is-invalid @enderror"
                                                            name="skill[{{ $key }}]" placeholder="">
                                                        @error('skill')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_member_skill', $editDataSkill->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i class="btn btn-info fa fa-plus-circle add_skills_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataSkills) || count($editDataSkills) == 0)
                                <div class="" id="add_skills_extra_div">
                                    <div class="row remove_skills_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Skill</label>
                                                    <input id="skill" type="text"
                                                        value="{{ !empty($editDataSkill->skill) ? $editDataSkill->skill : @old('skill')[5000] }}"
                                                        class="form-control @error('skill') is-invalid @enderror"
                                                        name="skill[5000]" placeholder=""> @error('skill')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_skills_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_skills_div_here"></div>
                        </div>
                        <div id="projects" class="tabcontent">
                            <h4 style="margin-top: 3%;">Project Accomplishments</h4>
                            @if (!empty($editDataProjects))
                                @foreach ($editDataProjects as $key => $editDataProject)
                                    <div class="" id="add_projects_extra_div">
                                        <div class="row remove_projects_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label>Project Title</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataProject->id) ? $editDataProject->id : '' }}"
                                                            name="projects_id[{{ $key }}]">
                                                        <input id="project_title" type="text"
                                                            value="{{ !empty($editDataProject->project_title) ? $editDataProject->project_title : @old('project_title')[$key] }}"
                                                            class="form-control @error('project_title') is-invalid @enderror"
                                                            name="project_title[{{ $key }}]" placeholder="">
                                                        @error('project_title')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>URL Link</label>
                                                        <input id="project_url_link" type="url"
                                                            value="{{ !empty($editDataProject->project_url_link) ? $editDataProject->project_url_link : @old('project_url_link')[$key] }}"
                                                            class="form-control @error('project_url_link') is-invalid @enderror"
                                                            name="project_url_link[{{ $key }}]"
                                                            placeholder=""> @error('project_url_link')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>From</label>
                                                        <select class="form-control col-sm-12"
                                                            name="project_from_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('project_from_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="project_from_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataProject->project_from_year) && $editDataProject->project_from_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('project_from_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>To</label>
                                                        <select class="form-control col-sm-12"
                                                            name="project_to_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('project_to_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="project_to_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataProject->project_to_year) && $editDataProject->project_to_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('project_to_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>Project Description</label>
                                                        <textarea id="project_description-{{ $key }}" name="project_description[{{ $key }}]"
                                                            class="form-control @error('project_description') is-invalid @enderror" placeholder="">{{ !empty($editDataProject->project_description) ? $editDataProject->project_description : @old('project_description')[$key] }}</textarea>
                                                        @error('project_description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a href="{{ route('remove_projects', $editDataProject->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i class="btn btn-info fa fa-plus-circle add_projects_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataProjects) || count($editDataProjects) == 0)
                                <div class="" id="add_projects_extra_div">
                                    <div class="row remove_projects_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Project Title</label>
                                                    <input id="project_title" type="text"
                                                        value="{{ !empty($editDataProject->project_title) ? $editDataProject->project_title : @old('project_title')[5000] }}"
                                                        class="form-control @error('project_title') is-invalid @enderror"
                                                        name="project_title[5000]" placeholder="">
                                                    @error('project_title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>URL Link</label>
                                                    <input id="project_url_link" type="url"
                                                        value="{{ !empty($editDataProject->project_url_link) ? $editDataProject->project_url_link : @old('project_url_link')[5000] }}"
                                                        class="form-control @error('project_url_link') is-invalid @enderror"
                                                        name="project_url_link[5000]" placeholder="">
                                                    @error('project_url_link')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>From</label>
                                                    <select class="form-control col-sm-12"
                                                        name="project_from_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataProject->project_from_month) && $editDataProject->project_from_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('project_from_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12"
                                                        name="project_from_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataProject->project_from_year) && $editDataProject->project_from_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('project_from_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>To</label>
                                                    <select class="form-control col-sm-12"
                                                        name="project_to_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataProject->project_to_month) && $editDataProject->project_to_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('project_to_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12" name="project_to_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataProject->project_to_year) && $editDataProject->project_to_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('project_to_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <label>Project Description</label>
                                                    <textarea id="project_description-5000" name="project_description[5000]"
                                                        class="form-control @error('project_description') is-invalid @enderror" placeholder="">{{ !empty($editDataProject->project_description) ? $editDataProject->project_description : @old('project_description')[5000] }}</textarea>
                                                    @error('project_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_projects_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_projects_div_here"></div>
                        </div>
                        <div id="training" class="tabcontent">
                            <h4 style="margin-top: 3%;">Training Accomplishments</h4>
                            @if (!empty($editDataTrainings))
                                @foreach ($editDataTrainings as $key => $editDataTraining)
                                    <div class="" id="add_training_extra_div">
                                        <div class="row remove_training_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label>Training Title</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataTraining->id) ? $editDataTraining->id : '' }}"
                                                            name="training_id[{{ $key }}]">
                                                        <input id="training_title" type="text"
                                                            value="{{ !empty($editDataTraining->training_title) ? $editDataTraining->training_title : @old('training_title')[$key] }}"
                                                            class="form-control @error('training_title') is-invalid @enderror"
                                                            name="training_title[{{ $key }}]" placeholder="">
                                                        @error('training_title')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>URL Link</label>
                                                        <input id="training_url_link" type="url"
                                                            value="{{ !empty($editDataTraining->training_url_link) ? $editDataTraining->training_url_link : @old('training_url_link')[$key] }}"
                                                            class="form-control @error('training_url_link') is-invalid @enderror"
                                                            name="training_url_link[{{ $key }}]"
                                                            placeholder=""> @error('training_url_link')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>From</label>
                                                        <select class="form-control col-sm-12"
                                                            name="training_from_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('training_from_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="training_from_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataTraining->training_from_year) && $editDataTraining->training_from_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('training_from_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>To</label>
                                                        <select class="form-control col-sm-12"
                                                            name="training_to_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('training_to_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="training_to_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataTraining->training_to_year) && $editDataTraining->training_to_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('training_to_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>Training Description</label>
                                                        <textarea id="training_description-{{ $key }}" name="training_description[{{ $key }}]"
                                                            class="form-control @error('training_description') is-invalid @enderror" placeholder="">{{ !empty($editDataTraining->training_description) ? $editDataTraining->training_description : @old('training_description')[$key] }}</textarea>
                                                        @error('training_description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a href="{{ route('remove_training', $editDataTraining->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i class="btn btn-info fa fa-plus-circle add_training_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataTrainings) || count($editDataTrainings) == 0)
                                <div class="" id="add_training_extra_div">
                                    <div class="row remove_training_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Training Title</label>
                                                    <input id="training_title" type="text"
                                                        value="{{ !empty($editDataTraining->training_title) ? $editDataTraining->training_title : @old('training_title')[5000] }}"
                                                        class="form-control @error('training_title') is-invalid @enderror"
                                                        name="training_title[5000]" placeholder="">
                                                    @error('training_title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>URL Link</label>
                                                    <input id="training_url_link" type="url"
                                                        value="{{ !empty($editDataTraining->training_url_link) ? $editDataTraining->training_url_link : @old('training_url_link')[5000] }}"
                                                        class="form-control @error('training_url_link') is-invalid @enderror"
                                                        name="training_url_link[5000]" placeholder="">
                                                    @error('training_url_link')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>From</label>
                                                    <select class="form-control col-sm-12"
                                                        name="training_from_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataTraining->training_from_month) && $editDataTraining->training_from_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('training_from_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12"
                                                        name="training_from_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataTraining->training_from_year) && $editDataTraining->training_from_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('training_from_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>To</label>
                                                    <select class="form-control col-sm-12"
                                                        name="training_to_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataTraining->training_to_month) && $editDataTraining->training_to_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('training_to_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12"
                                                        name="training_to_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataTraining->training_to_year) && $editDataTraining->training_to_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('training_to_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <label>Training Description</label>
                                                    <textarea id="training_description-5000" name="training_description[5000]"
                                                        class="form-control @error('training_description') is-invalid @enderror" placeholder="">{{ !empty($editDataTraining->training_description) ? $editDataTraining->training_description : @old('training_description')[5000] }}</textarea>
                                                    @error('training_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_training_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_training_div_here"></div>
                        </div>
                        <div id="certification" class="tabcontent">
                            <h4 style="margin-top: 3%;">Certification Accomplishments</h4>
                            @if (!empty($editDataCertifications))
                                @foreach ($editDataCertifications as $key => $editDataCertification)
                                    <div class="" id="add_certification_extra_div">
                                        <div class="row remove_certification_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label>Certification Title</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataCertification->id) ? $editDataCertification->id : '' }}"
                                                            name="certification_id[{{ $key }}]">
                                                        <input id="certification_title" type="text"
                                                            value="{{ !empty($editDataCertification->certification_title) ? $editDataCertification->certification_title : @old('certification_title')[$key] }}"
                                                            class="form-control @error('certification_title') is-invalid @enderror"
                                                            name="certification_title[{{ $key }}]"
                                                            placeholder=""> @error('certification_title')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>URL Link</label>
                                                        <input id="certification_url_link" type="url"
                                                            value="{{ !empty($editDataCertification->certification_url_link) ? $editDataCertification->certification_url_link : @old('certification_url_link')[$key] }}"
                                                            class="form-control @error('certification_url_link') is-invalid @enderror"
                                                            name="certification_url_link[{{ $key }}]"
                                                            placeholder=""> @error('certification_url_link')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>Certification Month</label>
                                                        <select class="form-control col-sm-12"
                                                            name="certification_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataCertification->certification_month) &&
                                                                $editDataCertification->certification_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataCertification->certification_month) &&
                                                                $editDataCertification->certification_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataCertification->certification_month) &&
                                                                $editDataCertification->certification_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataCertification->certification_month) &&
                                                                $editDataCertification->certification_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataCertification->certification_month) && $editDataCertification->certification_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataCertification->certification_month) && $editDataCertification->certification_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataCertification->certification_month) && $editDataCertification->certification_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataCertification->certification_month) &&
                                                                $editDataCertification->certification_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataCertification->certification_month) &&
                                                                $editDataCertification->certification_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataCertification->certification_month) &&
                                                                $editDataCertification->certification_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataCertification->certification_month) &&
                                                                $editDataCertification->certification_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataCertification->certification_month) &&
                                                                $editDataCertification->certification_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('certification_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>Certification Year</label>
                                                        <select class="form-control col-sm-12"
                                                            name="certification_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataCertification->certification_year) && $editDataCertification->certification_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('certification_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Certification Description</label>
                                                        <textarea id="certification_description-{{ $key }}"
                                                            name="certification_description[{{ $key }}]"
                                                            class="form-control @error('certification_description') is-invalid @enderror" placeholder="">{{ !empty($editDataCertification->certification_description) ? $editDataCertification->certification_description : @old('certification_description')[$key] }}</textarea>
                                                        @error('certification_description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_certification', $editDataCertification->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i class="btn btn-info fa fa-plus-circle add_certification_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataCertifications) || count($editDataCertifications) == 0)
                                <div class="" id="add_certification_extra_div">
                                    <div class="row remove_certification_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Certification Title</label>
                                                    <input id="certification_title" type="text"
                                                        value="{{ !empty($editDataCertification->certification_title) ? $editDataCertification->certification_title : @old('certification_title')[5000] }}"
                                                        class="form-control @error('certification_title') is-invalid @enderror"
                                                        name="certification_title[5000]" placeholder="">
                                                    @error('certification_title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>URL Link</label>
                                                    <input id="certification_url_link" type="url"
                                                        value="{{ !empty($editDataCertification->certification_url_link) ? $editDataCertification->certification_url_link : @old('certification_url_link')[5000] }}"
                                                        class="form-control @error('certification_url_link') is-invalid @enderror"
                                                        name="certification_url_link[5000]" placeholder="">
                                                    @error('certification_url_link')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>Certification Month</label>
                                                    <select class="form-control col-sm-12"
                                                        name="certification_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataCertification->certification_month) &&
                                                            $editDataCertification->certification_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataCertification->certification_month) &&
                                                            $editDataCertification->certification_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataCertification->certification_month) &&
                                                            $editDataCertification->certification_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataCertification->certification_month) &&
                                                            $editDataCertification->certification_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataCertification->certification_month) && $editDataCertification->certification_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataCertification->certification_month) && $editDataCertification->certification_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataCertification->certification_month) && $editDataCertification->certification_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataCertification->certification_month) &&
                                                            $editDataCertification->certification_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataCertification->certification_month) &&
                                                            $editDataCertification->certification_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataCertification->certification_month) &&
                                                            $editDataCertification->certification_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataCertification->certification_month) &&
                                                            $editDataCertification->certification_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataCertification->certification_month) &&
                                                            $editDataCertification->certification_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('certification_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>Certification Year</label>
                                                    <select class="form-control col-sm-12"
                                                        name="certification_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataCertification->certification_year) && $editDataCertification->certification_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('certification_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Certification Description</label>
                                                    <textarea id="certification_description-5000" name="certification_description[5000]"
                                                        class="form-control @error('certification_description') is-invalid @enderror" placeholder="">{{ !empty($editDataCertification->certification_description) ? $editDataCertification->certification_description : @old('certification_description')[5000] }}</textarea>
                                                    @error('certification_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_certification_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_certification_div_here"></div>
                        </div>



                        <div id="publish_books" class="tabcontent">
                            <h4 style="margin-top: 3%;">Publish Books</h4>
                            <div class="row" style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <input type="hidden"
                                                value="{{ !empty($editDataBook->id) ? $editDataBook->id : '' }}"
                                                name="book_id">
                                            <label>Book Description</label>
                                            <textarea id="book_description" name="book_description"
                                                class="textarea form-control @error('book_description') is-invalid @enderror" placeholder="">{{ !empty($editDataBook->book_description) ? $editDataBook->book_description : @old('book_description') }}</textarea>
                                            @error('book_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        </div>

                        </div>
                        <div id="publish_journals" class="tabcontent">
                            <h4 style="margin-top: 3%;">Publish Journals</h4>
                            <div class="row">
                                <div class="col-12">
                                        <div class="form-group col-sm-12">
                                            <input type="hidden"
                                                value="{{ !empty($editDataJournal->id) ? $editDataJournal->id : '' }}"
                                                name="journal_id">
                                            <label>Journal Description</label>
                                            <textarea id="journal_description" name="journal_description"
                                                class="textarea form-control @error('journal_description') is-invalid @enderror" placeholder="">{{ !empty($editDataJournal->journal_description) ? $editDataJournal->journal_description : @old('journal_description') }}</textarea>
                                            @error('journal_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                        </div>


                        <div id="conference" class="tabcontent">
                            <h4 style="margin-top: 3%;">Conference & Research Seminar</h4>
                            <div class="row">
                                <div class="col-12">
                                        <div class="form-group col-sm-12">
                                            <input type="hidden"
                                                value="{{ !empty($editDataConference->id) ? $editDataConference->id : '' }}"
                                                name="conference_id">
                                            <label>Conference Description</label>
                                            <textarea id="conference_description" name="conference_description"
                                                class="textarea form-control @error('conference_description') is-invalid @enderror" placeholder="">{{ !empty($editDataConference->conference_description) ? $editDataConference->conference_description : @old('conference_description') }}</textarea>
                                            @error('conference_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div id="taught_courses" class="tabcontent">
                            <h4 style="margin-top: 3%;">TaughtCourses</h4>

                            @if (!empty($editDataTaughtCourses))
                                @foreach ($editDataTaughtCourses as $key => $editDataTaughtCourse)
                                    <div class="" id="add_taught_courses_extra_div">
                                        <div class="row remove_taught_courses_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-12">
                                                        <label>Taught Course</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataTaughtCourse->id) ? $editDataTaughtCourse->id : '' }}"
                                                            name="taught_course_id[{{ $key }}]">
                                                        <input id="taught_course" type="text"
                                                            value="{{ !empty($editDataTaughtCourse->taught_course) ? $editDataTaughtCourse->taught_course : @old('taught_course')[$key] }}"
                                                            class="form-control @error('taught_course') is-invalid @enderror"
                                                            name="taught_course[{{ $key }}]" placeholder="">
                                                        @error('taught_course')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_member_taught_course', $editDataTaughtCourse->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i
                                                        class="btn btn-info fa fa-plus-circle add_taught_courses_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataTaughtCourses) || count($editDataTaughtCourses) == 0)
                                <div class="" id="add_taught_courses_extra_div">
                                    <div class="row remove_taught_courses_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <label>Taught Course</label>
                                                    <input id="taught_course" type="text"
                                                        value="{{ !empty($editDataTaughtCourse->taught_course) ? $editDataTaughtCourse->taught_course : @old('taught_course')[5000] }}"
                                                        class="form-control @error('taught_course') is-invalid @enderror"
                                                        name="taught_course[5000]" placeholder="">
                                                    @error('taught_course')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_taught_courses_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_taught_courses_div_here"></div>
                        </div>
                        <div id="languages" class="tabcontent">
                            <h4 style="margin-top: 3%;">Languages</h4>

                            @if (!empty($editDataLanguages))
                                @foreach ($editDataLanguages as $key => $editDataLanguage)
                                    <div class="" id="add_languages_extra_div">
                                        <div class="row remove_languages_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label>Language</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataLanguage->id) ? $editDataLanguage->id : '' }}"
                                                            name="language_id[{{ $key }}]">
                                                        <input id="language" type="text"
                                                            value="{{ !empty($editDataLanguage->language) ? $editDataLanguage->language : @old('language')[$key] }}"
                                                            class="form-control @error('language') is-invalid @enderror"
                                                            name="language[{{ $key }}]" placeholder="">
                                                        @error('language')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Proficiency Level</label>
                                                        <input id="proficiency_level" type="text"
                                                            value="{{ !empty($editDataLanguage->proficiency_level) ? $editDataLanguage->proficiency_level : @old('proficiency_level')[$key] }}"
                                                            class="form-control @error('proficiency_level') is-invalid @enderror"
                                                            name="proficiency_level[{{ $key }}]"
                                                            placeholder=""> @error('proficiency_level')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_member_language', $editDataLanguage->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i class="btn btn-info fa fa-plus-circle add_languages_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataLanguages) || count($editDataLanguages) == 0)
                                <div class="" id="add_languages_extra_div">
                                    <div class="row remove_languages_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Language</label>
                                                    <input id="language" type="text"
                                                        value="{{ !empty($editDataLanguage->language) ? $editDataLanguage->language : @old('language')[5000] }}"
                                                        class="form-control @error('language') is-invalid @enderror"
                                                        name="language[5000]" placeholder=""> @error('language')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Proficiency Level</label>
                                                    <input id="proficiency_level" type="text"
                                                        value="{{ !empty($editDataLanguage->proficiency_level) ? $editDataLanguage->proficiency_level : @old('proficiency_level')[5000] }}"
                                                        class="form-control @error('proficiency_level') is-invalid @enderror"
                                                        name="proficiency_level[5000]" placeholder="">
                                                    @error('proficiency_level')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_languages_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_languages_div_here"></div>
                        </div>
                        <div id="social_welfares" class="tabcontent">
                            <h4 style="margin-top: 3%;">Experience on Social Welfare</h4>

                            @if (!empty($editDataSocialWelfares))
                                @foreach ($editDataSocialWelfares as $key => $editDataSocialWelfare)
                                    <div class="" id="add_social_welfares_extra_div">
                                        <div class="row remove_social_welfares_extra_div"
                                            style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                            <div class="col-11"
                                                style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label>Social Designation</label>
                                                        <input type="hidden"
                                                            value="{{ !empty($editDataSocialWelfare->id) ? $editDataSocialWelfare->id : '' }}"
                                                            name="social_welfare_id[{{ $key }}]">
                                                        <input id="social_designation" type="text"
                                                            value="{{ !empty($editDataSocialWelfare->social_designation) ? $editDataSocialWelfare->social_designation : @old('social_designation')[$key] }}"
                                                            class="form-control @error('social_designation') is-invalid @enderror"
                                                            name="social_designation[{{ $key }}]"
                                                            placeholder=""> @error('social_designation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Organization Details</label>
                                                        <input id="social_organization_details" type="text"
                                                            value="{{ !empty($editDataSocialWelfare->social_organization_details) ? $editDataSocialWelfare->social_organization_details : @old('social_organization_details')[$key] }}"
                                                            class="form-control @error('social_organization_details') is-invalid @enderror"
                                                            name="social_organization_details[{{ $key }}]"
                                                            placeholder=""> @error('social_organization_details')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>From</label>
                                                        <select class="form-control col-sm-12"
                                                            name="social_from_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) &&
                                                                $editDataSocialWelfare->social_from_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('social_from_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="social_from_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataSocialWelfare->social_from_year) && $editDataSocialWelfare->social_from_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('social_from_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>To</label>
                                                        <select class="form-control col-sm-12"
                                                            name="social_to_month[{{ $key }}]">
                                                            <option value="">Select Month</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'January') selected @endif
                                                                value="January">January</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'February') selected @endif
                                                                value="February">February</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'March') selected @endif
                                                                value="March">March</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'April') selected @endif
                                                                value="April">April</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'May') selected @endif
                                                                value="May">May</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'June') selected @endif
                                                                value="June">June</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'July') selected @endif
                                                                value="July">July</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'August') selected @endif
                                                                value="August">August</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'September') selected @endif
                                                                value="September">September</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'October') selected @endif
                                                                value="October">October</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'November') selected @endif
                                                                value="November">November</option>
                                                            <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'December') selected @endif
                                                                value="December">December</option>
                                                        </select>
                                                        @error('social_to_month')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control col-sm-12"
                                                            name="social_to_year[{{ $key }}]">
                                                            <option value="">Select Year</option>
                                                            @for ($i = 1900; $i <= date('Y'); $i++)
                                                                <option
                                                                    @if (!empty($editDataSocialWelfare->social_to_year) && $editDataSocialWelfare->social_to_year == $i) selected @endif
                                                                    value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                        @error('social_to_year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"
                                                style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                                <div class="form-group col-md-2">
                                                    @if ($key != 0)
                                                        <a
                                                            href="{{ route('remove_member_social_welfare', $editDataSocialWelfare->id) }}">
                                                            <i class="btn btn-danger fas fa-trash"> </i> </a>
                                                    @endif
                                                    <i
                                                        class="btn btn-info fa fa-plus-circle add_social_welfares_extra"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            @if (empty($editDataSocialWelfares) || count($editDataSocialWelfares) == 0)
                                <div class="" id="add_social_welfares_extra_div">
                                    <div class="row remove_social_welfares_extra_div"
                                        style="margin-top: 2px;margin-left: 0; margin-right:0;">
                                        <div class="col-11"
                                            style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Social Designation</label>
                                                    <input id="social_designation" type="text"
                                                        value="{{ !empty($editDataSocialWelfare->social_designation) ? $editDataSocialWelfare->social_designation : @old('social_designation')[5000] }}"
                                                        class="form-control @error('social_designation') is-invalid @enderror"
                                                        name="social_designation[5000]" placeholder="">
                                                    @error('social_designation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Organization Details</label>
                                                    <input id="social_organization_details" type="text"
                                                        value="{{ !empty($editDataSocialWelfare->social_organization_details) ? $editDataSocialWelfare->social_organization_details : @old('social_organization_details')[5000] }}"
                                                        class="form-control @error('social_organization_details') is-invalid @enderror"
                                                        name="social_organization_details[5000]" placeholder="">
                                                    @error('social_organization_details')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>From</label>
                                                    <select class="form-control col-sm-12"
                                                        name="social_from_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) &&
                                                            $editDataSocialWelfare->social_from_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_from_month) && $editDataSocialWelfare->social_from_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('social_from_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12"
                                                        name="social_from_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataSocialWelfare->social_from_year) && $editDataSocialWelfare->social_from_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('social_from_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>To</label>
                                                    <select class="form-control col-sm-12" name="social_to_month[5000]">
                                                        <option value="">Select Month</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'January') selected @endif
                                                            value="January">January</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'February') selected @endif
                                                            value="February">February</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'March') selected @endif
                                                            value="March">March</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'April') selected @endif
                                                            value="April">April</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'May') selected @endif
                                                            value="May">May</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'June') selected @endif
                                                            value="June">June</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'July') selected @endif
                                                            value="July">July</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'August') selected @endif
                                                            value="August">August</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'September') selected @endif
                                                            value="September">September</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'October') selected @endif
                                                            value="October">October</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'November') selected @endif
                                                            value="November">November</option>
                                                        <option @if (!empty($editDataSocialWelfare->social_to_month) && $editDataSocialWelfare->social_to_month == 'December') selected @endif
                                                            value="December">December</option>
                                                    </select>
                                                    @error('social_to_month')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control col-sm-12" name="social_to_year[5000]">
                                                        <option value="">Select Year</option>
                                                        @for ($i = 1900; $i <= date('Y'); $i++)
                                                            <option @if (!empty($editDataSocialWelfare->social_to_year) && $editDataSocialWelfare->social_to_year == $i) selected @endif
                                                                value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('social_to_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"
                                            style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                                            <div class="form-group col-md-2">
                                                <i class="btn btn-info fa fa-plus-circle add_social_welfares_extra"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="" id="extra_social_welfares_div_here"></div>
                        </div>
                        <button style="margin-top: 2%;" class="btn bg-gradient-success btn-flat"><i
                                class="fas fa-save"></i>
                            {{ !empty($editData) ? 'Update Member Info' : 'Save Member Info' }}</button>
                        {{-- </form> --}}

                    </div>
                </div>
            </form>
        </div>
        <!--/. container-fluid -->
    </section>
    <script id="extra_education_templete" type="text/x-handlebars-template">

        <div class="row remove_education_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label>Degree</label>
                        <input type="text" value="" class="form-control @error('degree') is-invalid @enderror" name="degree[@{{counter}}]" placeholder=""> @error('degree')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Subject</label>
                        <input type="text" value="" class="form-control @error('subject') is-invalid @enderror" name="subject[@{{counter}}]" placeholder="">
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
<!--
                    <div class="form-group col-sm-2">
                        <label>From Year</label>
                        <select class="form-control" name="education_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('education_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                -->
                    <div class="form-group col-sm-4">
                        <label>Year</label>
                        <select class="form-control" name="education_to_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('education_to_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Institution</label>
                        <input type="text" value="" class="form-control @error('education_institution') is-invalid @enderror" name="education_institution[@{{counter}}]" placeholder="">
                        @error('education_institution')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Country</label>
                        <input type="text" value="" class="form-control @error('education_country') is-invalid @enderror" name="education_country[@{{counter}}]" placeholder="">
                        @error('education_country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_education_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_education_extra"> </i>
                </div>

            </div>
        </div>
    </script>

    <script id="extra_experience_templete" type="text/x-handlebars-template">
        <div class="row remove_experience_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label>Designation</label>
                        <input id="designation" type="text" value="" class="form-control @error('designation') is-invalid @enderror" name="designation[@{{counter}}]" placeholder=""> @error('designation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Institution</label>
                        <input id="experience_institution" type="text" value="" class="form-control @error('experience_institution') is-invalid @enderror" name="experience_institution[@{{counter}}]" placeholder="">
                        @error('experience_institution')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Country</label>
                        <input id="experience_country" type="text" value="" class="form-control @error('experience_country') is-invalid @enderror" name="experience_country[@{{counter}}]" placeholder="">
                        @error('experience_country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>From</label>
                        <select class="form-control col-sm-12" name="experience_from_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('experience_from_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="experience_from_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('experience_from_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>To</label>
                        <select class="form-control col-sm-12" name="experience_to_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('experience_to_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="experience_to_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('experience_to_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_experience_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_experience_extra"> </i>
                </div>

            </div>
        </div>
    </script>

    <script id="extra_administrative_templete" type="text/x-handlebars-template">
        <div class="row remove_administrative_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Designation</label>
                        <input id="administrative_designation" type="text" value="" class="form-control @error('administrative_designation') is-invalid @enderror" name="administrative_designation[@{{counter}}]" placeholder=""> @error('administrative_designation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Department & Details</label>
                        <input id="administrative_details" type="text" value="" class="form-control @error('administrative_details') is-invalid @enderror" name="administrative_details[@{{counter}}]" placeholder=""> @error('administrative_details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>From</label>
                        <select class="form-control col-sm-12" name="administrative_from_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('administrative_from_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="administrative_from_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('administrative_from_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>To</label>
                        <select class="form-control col-sm-12" name="administrative_to_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('administrative_to_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="administrative_to_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('administrative_to_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_administrative_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_administrative_extra"> </i>
                </div>

            </div>
        </div>
    </script>

    <script id="extra_area_of_interest_templete" type="text/x-handlebars-template">
        <div class="row remove_area_of_interest_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label>Area of Interest</label>
                        <input id="interest_area" type="text" value="" class="form-control @error('interest_area') is-invalid @enderror" name="interest_area[@{{counter}}]" placeholder=""> @error('interest_area')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_area_of_interest_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_area_of_interest_extra"> </i>
                </div>

            </div>
        </div>
    </script>

    <script id="extra_honor_and_awards_templete" type="text/x-handlebars-template">
        <div class="row remove_honor_and_awards_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Award Title</label>
                        <input id="award_title" type="text" value="" class="form-control @error('award_title') is-invalid @enderror" name="award_title[@{{counter}}]" placeholder=""> @error('award_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Awarded Month</label>
                        <select class="form-control col-sm-12" name="awarded_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('awarded_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="awarded_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('awarded_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12">
                        <label>Award Description</label>
                        <textarea name="award_description[@{{counter}}]" class="form-control @error('award_description') is-invalid @enderror" placeholder=""></textarea>
                        @error('award_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_honor_and_awards_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_honor_and_awards_extra"> </i>
                </div>

            </div>
        </div>
    </script>
    <script id="extra_scholarships_templete" type="text/x-handlebars-template">
        <div class="row remove_scholarships_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Scholarship Title</label>
                        <input id="scholarship_title" type="text" value="" class="form-control @error('scholarship_title') is-invalid @enderror" name="scholarship_title[@{{counter}}]" placeholder=""> @error('scholarship_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Scholarship Month</label>
                        <select class="form-control col-sm-12" name="scholarship_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('scholarship_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="scholarship_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('scholarship_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Scholarship From</label>
                        <input id="scholarship_from" type="text" value="" class="form-control @error('scholarship_from') is-invalid @enderror" name="scholarship_from[@{{counter}}]" placeholder=""> @error('scholarship_from')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Scholarship Description</label>
                        <textarea name="scholarship_description[@{{counter}}]" class="form-control @error('scholarship_description') is-invalid @enderror" placeholder=""></textarea>
                        @error('scholarship_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_scholarships_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_scholarships_extra"> </i>
                </div>

            </div>
        </div>
    </script>

    <script id="extra_membership_templete" type="text/x-handlebars-template">
        <div class="row remove_membership_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Membership Title</label>
                        <input id="membership_title" type="text" value="" class="form-control @error('membership_title') is-invalid @enderror" name="membership_title[@{{counter}}]" placeholder=""> @error('membership_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Membership Type</label>
                        <input id="membership_type" type="text" value="" class="form-control @error('membership_type') is-invalid @enderror" name="membership_type[@{{counter}}]" placeholder="">
                        @error('membership_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>From</label>
                        <select class="form-control col-sm-12" name="membership_from_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('membership_from_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="membership_from_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('membership_from_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>To</label>
                        <select class="form-control col-sm-12" name="membership_to_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('membership_to_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="membership_to_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('membership_to_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_membership_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_membership_extra"> </i>
                </div>

            </div>
        </div>
    </script>

    <script id="extra_responsibilities_templete" type="text/x-handlebars-template">
        <div class="row remove_responsibilities_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Designation</label>
                        <input id="responsibilities_designation" type="text" value="" class="form-control @error('responsibilities_designation') is-invalid @enderror" name="responsibilities_designation[@{{counter}}]" placeholder=""> @error('responsibilities_designation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>URL Link</label>
                        <input id="responsibilities_url_link" type="url" value="" class="form-control @error('responsibilities_url_link') is-invalid @enderror" name="responsibilities_url_link[@{{counter}}]" placeholder=""> @error('responsibilities_url_link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Organization/Institute Name</label>
                        <input id="responsibilities_organization_name" type="text" value="" class="form-control @error('responsibilities_organization_name') is-invalid @enderror" name="responsibilities_organization_name[@{{counter}}]" placeholder=""> @error('responsibilities_organization_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>From Year</label>
                        <select class="form-control col-sm-12" name="responsibilities_from_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('responsibilities_from_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>To Year</label>
                        <select class="form-control col-sm-12" name="responsibilities_to_year[@{{counter}}]">
                            <option value="">Present</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('responsibilities_to_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_responsibilities_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_responsibilities_extra"> </i>
                </div>

            </div>
        </div>
    </script>
    <script id="extra_skills_templete" type="text/x-handlebars-template">
        <div class="row remove_skills_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label>Skill</label>
                        <input id="skill" type="text" value="" class="form-control @error('skill') is-invalid @enderror" name="skill[@{{counter}}]" placeholder=""> @error('skill')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_skills_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_skills_extra"> </i>
                </div>

            </div>
        </div>
    </script>
    <script id="extra_projects_templete" type="text/x-handlebars-template">
        <div class="row remove_projects_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Project Title</label>
                        <input id="project_title" type="text" value="" class="form-control @error('project_title') is-invalid @enderror" name="project_title[@{{counter}}]" placeholder=""> @error('project_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>URL Link</label>
                        <input id="project_url_link" type="url" value="" class="form-control @error('project_url_link') is-invalid @enderror" name="project_url_link[@{{counter}}]" placeholder=""> @error('project_url_link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>From</label>
                        <select class="form-control col-sm-12" name="project_from_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('project_from_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="project_from_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('project_from_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>To</label>
                        <select class="form-control col-sm-12" name="project_to_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('project_to_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="project_to_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('project_to_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12">
                        <label>Project Description</label>
                        <textarea id="project_description-@{{counter}}" name="project_description[@{{counter}}]" class="form-control @error('project_description') is-invalid @enderror" placeholder=""></textarea>
                        @error('project_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_projects_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_projects_extra"> </i>
                </div>

            </div>
        </div>
    </script>
    <script id="extra_training_templete" type="text/x-handlebars-template">
        <div class="row remove_training_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Training Title</label>
                        <input id="training_title" type="text" value="" class="form-control @error('training_title') is-invalid @enderror" name="training_title[@{{counter}}]" placeholder=""> @error('training_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>URL Link</label>
                        <input id="training_url_link" type="url" value="" class="form-control @error('training_url_link') is-invalid @enderror" name="training_url_link[@{{counter}}]" placeholder=""> @error('training_url_link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>From</label>
                        <select class="form-control col-sm-12" name="training_from_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('training_from_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="training_from_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('training_from_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>To</label>
                        <select class="form-control col-sm-12" name="training_to_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('training_to_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="training_to_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('training_to_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12">
                        <label>Training Description</label>
                        <textarea id="training_description-@{{counter}}" name="training_description[@{{counter}}]" class="form-control @error('training_description') is-invalid @enderror" placeholder=""></textarea>
                        @error('training_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_training_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_training_extra"> </i>
                </div>

            </div>
        </div>
    </script>
    <script id="extra_certification_templete" type="text/x-handlebars-template">
        <div class="row remove_certification_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Certification Title</label>
                        <input id="certification_title" type="text" value="" class="form-control @error('certification_title') is-invalid @enderror" name="certification_title[@{{counter}}]" placeholder=""> @error('certification_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>URL Link</label>
                        <input id="certification_url_link" type="url" value="" class="form-control @error('certification_url_link') is-invalid @enderror" name="certification_url_link[@{{counter}}]" placeholder=""> @error('certification_url_link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Certification Month</label>
                        <select class="form-control col-sm-12" name="certification_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('certification_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Certification Year</label>
                        <select class="form-control col-sm-12" name="certification_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('certification_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Certification Description</label>
                        <textarea id="certification_description-@{{counter}}" name="certification_description[@{{counter}}]" class="form-control @error('certification_description') is-invalid @enderror" placeholder=""></textarea>
                        @error('certification_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_certification_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_certification_extra"> </i>
                </div>

            </div>
        </div>
    </script>

    <script id="extra_taught_courses_templete" type="text/x-handlebars-template">
        <div class="row remove_taught_courses_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label>Taught Course</label>
                        <input id="taught_course" type="text" value="" class="form-control @error('taught_course') is-invalid @enderror" name="taught_course[@{{counter}}]" placeholder=""> @error('taught_course')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_taught_courses_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_taught_courses_extra"> </i>
                </div>

            </div>
        </div>
    </script>
    <script id="extra_languages_templete" type="text/x-handlebars-template">
        <div class="row remove_languages_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Language</label>
                        <input id="language" type="text" value="" class="form-control @error('language') is-invalid @enderror" name="language[@{{counter}}]" placeholder=""> @error('language')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Proficiency Level</label>
                        <input id="proficiency_level" type="text" value="" class="form-control @error('proficiency_level') is-invalid @enderror" name="proficiency_level[@{{counter}}]" placeholder=""> @error('proficiency_level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_languages_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_languages_extra"> </i>
                </div>

            </div>
        </div>
    </script>
    <script id="extra_social_welfares_templete" type="text/x-handlebars-template">
        <div class="row remove_social_welfares_extra_div" style="margin-top: 2px;margin-left: 0; margin-right:0;">
            <div class="col-11" style="border: 2px solid #e6e6b9;padding: 20px;border-radius: 10px 0px 0px 10px;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Social Designation</label>
                        <input id="social_designation" type="text" value="" class="form-control @error('social_designation') is-invalid @enderror" name="social_designation[@{{counter}}]" placeholder=""> @error('social_designation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Organization Details</label>
                        <input id="social_organization_details" type="text" value="" class="form-control @error('social_organization_details') is-invalid @enderror" name="social_organization_details[@{{counter}}]" placeholder=""> @error('social_organization_details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>From</label>
                        <select class="form-control col-sm-12" name="social_from_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('social_from_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="social_from_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('social_from_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>To</label>
                        <select class="form-control col-sm-12" name="social_to_month[@{{counter}}]">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('social_to_month')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        <label>&nbsp;</label>
                        <select class="form-control col-sm-12" name="social_to_year[@{{counter}}]">
                            <option value="">Select Year</option>
                            @for($i=1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('social_to_year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-1" style="text-align: center;writing-mode: vertical-lr;background: #e6e6b9;border-radius: 0px 10px 10px 0px;">

                <div class="form-group col-md-2">
                    <i class="btn btn-info fa fa-plus-circle add_social_welfares_extra"></i>
                    <i class="btn btn-danger fa fa-minus-circle remove_social_welfares_extra"> </i>
                </div>

            </div>
        </div>
    </script>

    <script type="text/javascript">

        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_education_extra", function() {
                var extra_edu = document.getElementsByClassName("add_education_extra");
                if(extra_edu.length>3){
                    // $('.add_education_extra').remove();
                    toastr.error('', "You can not add more than 4 educational qualifications!");
                    return false;
                }

                console.log(extra_edu);
                var source = $("#extra_education_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_education_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_education_extra", function(event) {
                $(this).closest(".remove_education_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_experience_extra", function() {
                var source = $("#extra_experience_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_experience_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_experience_extra", function(event) {
                $(this).closest(".remove_experience_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_administrative_extra", function() {
                var source = $("#extra_administrative_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_administrative_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_administrative_extra", function(event) {
                $(this).closest(".remove_administrative_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_area_of_interest_extra", function() {
                var source = $("#extra_area_of_interest_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_area_of_interest_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_area_of_interest_extra", function(event) {
                $(this).closest(".remove_area_of_interest_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_honor_and_awards_extra", function() {
                var source = $("#extra_honor_and_awards_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_honor_and_awards_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_honor_and_awards_extra", function(event) {
                $(this).closest(".remove_honor_and_awards_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_scholarships_extra", function() {
                var source = $("#extra_scholarships_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_scholarships_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_scholarships_extra", function(event) {
                $(this).closest(".remove_scholarships_extra_div").remove();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_membership_extra", function() {
                var source = $("#extra_membership_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_membership_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_membership_extra", function(event) {
                $(this).closest(".remove_membership_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_responsibilities_extra", function() {
                var source = $("#extra_responsibilities_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_responsibilities_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_responsibilities_extra", function(event) {
                $(this).closest(".remove_responsibilities_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_skills_extra", function() {
                var source = $("#extra_skills_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_skills_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_skills_extra", function(event) {
                $(this).closest(".remove_skills_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_projects_extra", function() {
                var source = $("#extra_projects_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_projects_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_projects_extra", function(event) {
                $(this).closest(".remove_projects_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_training_extra", function() {
                var source = $("#extra_training_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_training_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_training_extra", function(event) {
                $(this).closest(".remove_training_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_certification_extra", function() {
                var source = $("#extra_certification_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_certification_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_certification_extra", function(event) {
                $(this).closest(".remove_certification_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_publish_books_extra", function() {
                var source = $("#extra_publish_books_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_publish_books_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_publish_books_extra", function(event) {
                $(this).closest(".remove_publish_books_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_publish_journals_extra", function() {
                var source = $("#extra_publish_journals_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_publish_journals_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_publish_journals_extra", function(event) {
                $(this).closest(".remove_publish_journals_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_conference_extra", function() {
                var source = $("#extra_conference_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_conference_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_conference_extra", function(event) {
                $(this).closest(".remove_conference_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_taught_courses_extra", function() {
                var source = $("#extra_taught_courses_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_taught_courses_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_taught_courses_extra", function(event) {
                $(this).closest(".remove_taught_courses_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_languages_extra", function() {
                var source = $("#extra_languages_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_languages_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_languages_extra", function(event) {
                $(this).closest(".remove_languages_extra_div").remove();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 10000;
            $(document).on("click", ".add_social_welfares_extra", function() {
                var source = $("#extra_social_welfares_templete").html();
                var template = Handlebars.compile(source);
                var data = {
                    counter: counter
                };
                var html = template(data);
                counter++;
                $("#extra_social_welfares_div_here").append(html);
                $('.select2').select2();
            });

            $(document).on("click", ".remove_social_welfares_extra", function(event) {
                $(this).closest(".remove_social_welfares_extra_div").remove();
            });
        });
    </script>

    {{-- For tab content --}}
    <script>
        $(document).ready(function() {

            // openCity(event, 'basic_info');

            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById("basic_info").style.display = "block";

        });

        function openCity(evt, cityName) {
            console.log(evt);
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    {{-- End For tab content --}}
    <script type="text/javascript">
        $(function() {
            $('#tour_name').on('keyup', function() {
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                $("#tour_slug").val(Text);
            });
        });
    </script>

    <script>
        $(function() {
            @if (@$editData->member_type == 3)
                radio_handle(3);
            @elseif (@$editData->member_type == 2)
                radio_handle(2);
            @else
                radio_handle(1);
            @endif
        });

        function radio_handle(val) {
            var member_type_value = val;
            if (member_type_value == 1) {
                $(".optional_tab").show();
            } else if (member_type_value == 2) {
                $(".optional_tab").hide();
            } else if (member_type_value == 3) {
                $(".optional_tab").hide();
            }

            $.ajax({
                url: "{{ route('member_type_wise_designation') }}",
                type: "GET",
                data: {
                    member_type_value: member_type_value
                },
                success: function(data) {
                    console.log(data);
                    if (data != 'fail') {
                        $('#designation_id').html('<option value ="">Select Designation</option>');
                        // $('#designation_id').html('');
                        var selected = "{{ @$editData->designation_id }}";
                        $.each(data, function(index, designation) {
                            $('#designation_id').append('<option value ="' + designation.id + '"' + ((
                                    designation.id == selected) ? ('selected') : '') + '>' +
                                designation.name + '</option>');
                        });
                    } else {
                        $('#designation_id').append('');
                    }
                }
            });
        };
    </script>
    <script>
        $(document).on('click', '#deleteImage', function() {
                var member_id = $(this).data("id");
                // alert(member_id);
                $.ajax({
                    url: "{{ route('delete_member_image') }}",
                    type: "GET",
                    data: {
                        member_id: member_id
                    },
                    success: function(data) {
                        $('#imgDiv').html('');
                        $('#imgDiv').append('<img src="{{ asset('public/frontend/images/about/user-dummy.jpeg') }}" height="70px" width="60px" alt="something" />');
                    }
                });
            });
    </script>
@endsection
