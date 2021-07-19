@extends('layouts.app')

@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Blank (Block) <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">That feeling of delight when you start your awesome new project!</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Generic</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Blank (Block)</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content">
        <!-- Your Block -->
        <div class="block block-themed">
            <div class="block-header bg-amethyst">
                <h3 class="block-title">
                    Block Title
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
                                <label for="nic" class="col-form-label">NIC No</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="nic"
                                    placeholder="Enter NIC No"
                                    name="nic"
                                >
                            </div>


                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="address_line1" class="col-form-label">Address Line1</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="address_line1"
                                    placeholder="Enter Address Line1"
                                    name="address_line1"
                                >
                            </div>
                            <div class="form-group">
                                <label for="address_line2" class="col-form-label">Address Line2</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="address_line2"
                                    placeholder="Enter Address Line2"
                                    name="address_line2"
                                >
                            </div>
                            <div class="form-group">
                                <label for="address_line3" class="col-form-label">Address Line3</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="address_line3"
                                    placeholder="Enter Address Line3"
                                    name="address_line3"
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
