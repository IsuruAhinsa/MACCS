@extends('layouts.app')

@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                   Edit Midwife
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="{{ url('/') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Edit Midwife
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="block block-themed">
            <div class="block-header">
                <h3 class="block-title">
                    Edit Midwife
                </h3>
            </div>

            <div class="block-content">

                @if(Session::has('password'))
                    {{ Session::get('password') }}
                @endif

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
                                    value="{{$midwife->first_name}}"
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
                                    value="{{$midwife->last_name}}"
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
                                    value="{{$midwife->email}}"
                                >
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="phone" class="col-form-label">Phone</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="phone"
                                    placeholder="Enter Phone"
                                    name="phone"
                                    value="{{$midwife->phone}}"
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
                                    value="{{$midwife->nic}}"
                                >
                            </div>

                            <div class="form-group">
                                <label for="cases" class="col-form-label">Assigned Cases</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt"
                                    id="cases"
                                    placeholder="Enter Assigned Cases"
                                    name="cases"
                                    value="{{$midwife->cases}}"
                                >
                            </div>

                        </div>

                    </div>

                    <div class="form-group">
                        <x-SubmitButton :btnText="'Create Midwife'" :cancelBtnRoute="url('/')"></x-SubmitButton>
                    </div>

                </form>

            </div>
        </div>

    </div>

@endsection
