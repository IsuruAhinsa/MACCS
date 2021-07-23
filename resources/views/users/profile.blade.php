@extends('layouts.app')

@section('content')

    <div class="bg-image" style="background-image: url({{ asset('assets/media/photos/photo8@2x.jpg') }});">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar13.jpg') }}" alt="">
                </div>
                <h1 class="h2 text-white mb-0">Midwife</h1>
                <span class="text-white-75">UI Designer</span>
            </div>
        </div>
    </div>

    <div class="content content-boxed">
        <div class="row">
            <div class="col-sm-12">

                @if(Session::has('success'))
                    <x-Alert type="success" :message="Session::get('success')"></x-Alert>
                @endif

                <ul class="timeline timeline-alt py-0">
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-success">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Information</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item font-size-sm">
                                        just now
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">

                                <form class="form-horizontal p-4" action="#" method="POST">

                                    @csrf

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="first_name" class="col-form-label">First Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-alt @error('first_name') is-invalid @enderror"
                                                    id="first_name"
                                                    placeholder="Enter First Name"
                                                    name="first_name"
                                                >
                                                @error('first_name')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <label for="last_name" class="col-form-label">Last Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-alt @error('last_name') is-invalid @enderror"
                                                    id="last_name"
                                                    placeholder="Enter Last Name"
                                                    name="last_name"
                                                >
                                                @error('last_name')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input
                                                    type="email"
                                                    class="form-control form-control-alt @error('email') is-invalid @enderror"
                                                    id="email"
                                                    placeholder="Enter Email"
                                                    name="email"

                                                >
                                                @error('email')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="image" class="col-form-label">Image</label>
                                                <div class="custom-file">
                                                    <input
                                                        type="file"
                                                        class="custom-file-input "
                                                        data-toggle="custom-file-input"
                                                        id="image"
                                                        name="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="phone" class="col-form-label">Phone</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-alt @error('phone') is-invalid @enderror"
                                                    id="phone"
                                                    placeholder="Enter Phone"
                                                    name="phone"
                                                >
                                                @error('phone')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="nic" class="col-form-label">NIC No</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-alt @error('nic') is-invalid @enderror"
                                                    id="nic"
                                                    placeholder="Enter NIC No"
                                                    name="nic"
                                                >
                                                @error('nic')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="cases" class="col-form-label">Assigned Cases</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-alt @error('cases') is-invalid @enderror"
                                                    id="cases"
                                                    placeholder="Enter Assigned Cases"
                                                    name="cases"
                                                >
                                                @error('cases')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <x-SubmitButton :btnText="'Save Midwife'" :cancelBtnRoute="url('/')"></x-SubmitButton>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-danger">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Change Password</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item font-size-sm">
                                        4 hrs ago
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full">

                                <form class="form-horizontal p-4" action="{{ route('update.password') }}" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="current_password" class="col-form-label">Current Password</label>
                                                <input
                                                    type="password"
                                                    class="form-control form-control-alt @error('current_password') is-invalid @enderror"
                                                    id="current_password"
                                                    placeholder="Enter Current Password"
                                                    name="current_password"
                                                >
                                                @error('current_password')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-form-label">New Password</label>
                                                <input
                                                    type="password"
                                                    class="form-control form-control-alt @error('password') is-invalid @enderror"
                                                    id="password"
                                                    placeholder="Enter New Password"
                                                    name="password"
                                                >
                                                @error('password')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password_confirmation" class="col-form-label">Re enter your new password</label>
                                                <input
                                                    type="password"
                                                    class="form-control form-control-alt"
                                                    id="password_confirmation"
                                                    placeholder="Re enter your new password"
                                                    name="password_confirmation"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <x-SubmitButton :btnText="'Update Password'" :cancelBtnRoute="url('/')"></x-SubmitButton>
                                    </div>

                                </form>


                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection
