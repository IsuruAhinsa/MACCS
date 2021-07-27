@extends('layouts.app')

@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    <span class="font-weight-normal">Create Newborn Health Record for</span> {{ $child->full_name }}
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="{{ url('/') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="{{ route('midwife.users.index') }}">All Parents & Children</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Create Newborn Health Record
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
                    Create Newborn Health Record
                </h3>
            </div>
            <div class="block-content">

                <form class="form-horizontal p-4" action="{{ route('midwife.users.store') }}" method="POST">

                    @csrf

                    <div class="row">

                        <div class="col-md-6">


                            <div class="form-group">
                                <label for="birthday" class="col-form-label"> Birthday</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt @error('birthday') is-invalid @enderror"
                                    id="birthday"
                                    placeholder="Enter Birthday"
                                    name="birthday"
                                    value="{{old('birthday')}}"
                                >
                                @error('birthday')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="apgar_score" class="col-form-label">Apgar Score</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt @error('apgar_score') is-invalid @enderror"
                                    id="apgar_score"
                                    placeholder="Enter Apgar_score"
                                    name="apgar_score"
                                    value="{{old('apgar Score')}}"
                                >
                                @error('apgar_score')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="birth_weight" class="col-form-label">Birth Weight</label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt @error('birth_weight') is-invalid @enderror"
                                    id="birth_weight"
                                    placeholder="Enter birth Weight"
                                    name="birth_weight"
                                    value="{{old('birth_weight')}}"
                                >
                                @error('birth_weight')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="birth_height" class="col-form-label">Birth Height</label>
                                <input
                                    type="birth_height"
                                    class="form-control form-control-alt @error('birth_height') is-invalid @enderror"
                                    id="birth_height"
                                    placeholder="Enter birth Height"
                                    name="birth_height"
                                    value="{{old('Birth_height')}}"
                                >
                                @error('birth_height')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="notes" class="col-form-label">Notes </label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt @error('notes') is-invalid @enderror"
                                    id="notes"
                                    placeholder="Enter Notes"
                                    name="notes"
                                    value="{{old('notes')}}"
                                >
                                @error('notes')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>



                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="birth_hcm" class="col-form-label">Birth HCM </label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt @error('birth_hcm') is-invalid @enderror"
                                    id="birth_hcm"
                                    placeholder="Enter Birth HCM"
                                    name="birth_hcm"
                                    value="{{old('birth_hcm')}}"
                                >
                                @error('birth_hcm')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="skin" class="col-form-label">Skin </label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt @error('skin') is-invalid @enderror"
                                    id="skin"
                                    placeholder="Enter Skin"
                                    name="skin"
                                    value="{{old('skin')}}"
                                >
                                @error('skin')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="eyes" class="col-form-label">Eyes </label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt @error('eyes') is-invalid @enderror"
                                    id="eyes"
                                    placeholder="Enter Eyes"
                                    name="eyes"
                                    value="{{old('eyes')}}"
                                >
                                @error('eyes')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="temperature" class="col-form-label">Temperature </label>
                                <input
                                    type="text"
                                    class="form-control form-control-alt @error('temperature') is-invalid @enderror"
                                    id="temperature"
                                    placeholder="Enter temperature"
                                    name="temperature"
                                    value="{{old('Temperature')}}"
                                >
                                @error('temperature')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>

                        </div>

                    </div>

                    <div class="form-group">
                        <x-SubmitButton :btnText="'Create Parent'" :cancelBtnRoute="url('/')"></x-SubmitButton>
                    </div>

                </form>

            </div>
        </div>

    </div>

@endsection
