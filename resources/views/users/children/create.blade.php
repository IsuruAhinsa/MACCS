@extends('layouts.app')

@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                   Add Child
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="{{ url('/') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Add Child
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
            <div class="block-header bg-smooth">
                <h3 class="block-title">
                    Add Child
                </h3>
            </div>
            <div class="block-content">

                <form class="form-horizontal p-4" action="{{ route('children.store') }}" method="POST">

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

                        <div class="col-sm-6">

                            <div class="form-group">
                                <label for="date_of registration" class="col-form-label">Date of Registration</label>
                                <input
                                    type="date"
                                    class="form-control form-control-alt"
                                    id="date_of registration"
                                    placeholder="Enter Date of Registration"
                                    name="date_of registration"
                                >
                            </div>

                            <div class="form-group">
                                <label for="birth_weight" class="col-form-label">Birth Weight</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="birth_weight"
                                    placeholder="Enter Birth Weight"
                                    name="birth_weight"
                                >
                            </div>

                            <div class="form-group">
                                <label for="health_status" class="col-form-label">Health Status</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="health_status"
                                    placeholder="Enter Health Status"
                                    name="health_status"
                                >
                            </div>

                        </div>

                    </div>

                    <div class="form-group">
                        <x-SubmitButton :btnText="'Add My Child'" :cancelBtnRoute="url('/')"></x-SubmitButton>
                    </div>

                </form>

            </div>
        </div>

    </div>

@endsection
