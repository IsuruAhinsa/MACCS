@extends('admin')

@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Create Midwife
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Create Midwife</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content">
        <!-- Your Block -->
        <div class="block block-themed">
            <div class="block-header">
                <h3 class="block-title">
                    Create Midwife
                </h3>
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
                                <label for="contact" class="col-form-label">Contact No</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="contact"
                                    placeholder="Enter Contact No"
                                    name="contact"
                                >
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label">Password</label>
                                <input
                                    type="password"
                                    class="form-control form-control-alt"
                                    id="password"
                                    placeholder="Enter Address "
                                    name="password"
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
                                <label for="address" class="col-form-label">Address</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="address"
                                    placeholder="Enter Address "
                                    name="address"
                                >
                            </div>

                            <div class="form-group">
                                <label for="assigned_cases" class="col-form-label">Assigned Cases</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="assigned_cases"
                                    placeholder="Enter Assigned Cases"
                                    name="assigned_cases"
                                >
                            </div>

                        </div>

                    </div>

                    <div class="form-group">
                        <x-SubmitButton :btnText="'Create'" :cancelBtnRoute="url('/')"></x-SubmitButton>
                    </div>

                </form>

            </div>
        </div>
        <!-- END Your Block -->
    </div>

@endsection
