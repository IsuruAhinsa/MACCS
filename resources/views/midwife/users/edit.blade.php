@extends('layouts.app')

@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                   Create Parents
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="{{ url('/') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Create Parents
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content">

        @if(Session::has('success'))
            <x-Alert type="success" :message="Session::get('success')"></x-Alert>
        @endif

        <!-- Your Block -->
        <div class="block block-themed">
            <div class="block-header bg-amethyst">
                <h3 class="block-title">
                    Create Parents
                </h3>
            </div>
            <div class="block-content">

                <form class="form-horizontal p-4" action="{{ route('midwife.users.store') }}" method="POST">

                    @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type" class="col-form-label">Parent Type</label>
                                <select class="custom-select form-control form-control-alt" id="type" name="type">
                                    <option selected disabled>Select Parent Type</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="first_name" class="col-form-label">First Name</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="first_name"
                                    placeholder="Enter First Name"
                                    name="first_name"
                                >
                            </div>

                            <div class="form-group">
                                <label for="last_name" class="col-form-label">Last Name</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="last_name"
                                    placeholder="Enter Last Name"
                                    name="last_name"
                                >
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-form-label">Phone</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="phone"
                                    placeholder="Enter Phone"
                                    name="phone"
                                >
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-form-label">Email</label>
                                <input
                                    type="email"
                                    class="form-control form-control-alt"
                                    id="email"
                                    placeholder="Enter Email"
                                    name="email"
                                >
                            </div>


                            <div class="form-group">
                                <label for="birthday" class="col-form-label">Birthday</label>
                                <input
                                    type="date"
                                    class="form-control form-control-alt"
                                    id="birthday"
                                    placeholder="Enter Birthday"
                                    name="birthday"
                                >
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nic" class="col-form-label">NIC No</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="nic"
                                    placeholder="Enter NIC No"
                                    name="nic"
                                >
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-form-label">Address </label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="address"
                                    placeholder="Enter Address"
                                    name="address"
                                >
                            </div>
                            <div class="form-group">
                                <label for="city" class="col-form-label">City </label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="city"
                                    placeholder="Enter City"
                                    name="city"
                                >
                            </div>
                            <div class="form-group">
                                <label for="province" class="col-form-label">Province </label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="province"
                                    placeholder="Enter Province"
                                    name="province"
                                >
                            </div>
                            <div class="form-group">
                                <label for="postal" class="col-form-label">Postal Code</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="postal"
                                    placeholder="Enter Postal Code"
                                    name="postal"
                                >
                            </div>

                        </div>

                    </div>

                    <div class="form-group">
                        <x-SubmitButton :btnText="'Create Parent'" :cancelBtnRoute="url('/')"></x-SubmitButton>
                    </div>

                </form>

            </div>
        </div>
        <!-- END Your Block -->
    </div>

@endsection