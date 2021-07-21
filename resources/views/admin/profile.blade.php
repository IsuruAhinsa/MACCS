@extends('layouts.app')

@section('content')

    <div class="bg-image" style="background-image: url({{ asset('assets/media/photos/photo8@2x.jpg') }});">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar13.jpg') }}" alt="">
                </div>
                <h1 class="h2 text-white mb-0">John Parker</h1>
                <span class="text-white-75">UI Designer</span>
            </div>
        </div>
    </div>

    <div class="bg-white border-bottom">
        <div class="content content-boxed">
            <div class="row items-push text-center">
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Sales</div>
                    <a class="link-fx font-size-h3" href="javascript:void(0)">17980</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Products</div>
                    <a class="link-fx font-size-h3" href="javascript:void(0)">27</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Followers</div>
                    <a class="link-fx font-size-h3" href="javascript:void(0)">1360</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase mb-2">739 Ratings</div>
                    <span class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                    <span class="font-size-sm text-muted">(4.9)</span>
                </div>
            </div>
        </div>
    </div>

    <div class="content content-boxed">
        <div class="row">
            <div class="col-sm-12">

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
                                                <label for="name" class="col-form-label"> Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-alt @error('name') is-invalid @enderror"
                                                    id="name"
                                                    placeholder="Enter Name"
                                                    name="name"
                                                >
                                                @error('name')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="admin_type" class="col-form-label">Admin Type</label>
                                                <select class="custom-select form-control form-control-alt" id="admin_type" name="admin_type">
                                                    <option selected disabled>Select Admin Type</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Super Admin</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">

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
                                                <label for="image" class="col-form-label">Admin Image</label>
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

                                    </div>

                                    <div class="form-group">
                                        <x-SubmitButton :btnText="'Create Admin'" :cancelBtnRoute="url('/')"></x-SubmitButton>
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

                                <form class="form-horizontal p-4" action="#" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Current Password</label>
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
                                                    class="form-control form-control-alt @error('password_confirmation') is-invalid @enderror"
                                                    id="password_confirmation"
                                                    placeholder="Re enter your new password"
                                                    name="password_confirmation"
                                                >
                                                @error('password_confirmation')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                                @enderror
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
