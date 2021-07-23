@extends('layouts.app')

@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    All Midwives
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="{{ url('/') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                             Midwives
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="row">
            <div class="col-sm-12">

                @if(Session::has('success'))
                    <x-Alert type="success" :message="Session::get('success')"></x-Alert>
                @endif

                <div class="row row-deck">

                    <div class="col-lg-12">
                        <div class="block block-mode-loading-oneui block-themed">
                            <div class="block-header border-bottom">
                                <h3 class="block-title">All Midwives</h3>
                            </div>

                            <div class="block-content block-content-full">
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter font-size-sm mb-0">
                                        <thead>
                                        <tr class="text-uppercase">
                                            <th class="font-w700" style="width: 80px;">ID</th>
                                            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 100px;">Photo</th>
                                            <th class="font-w700">Full Name</th>
                                            <th class="font-w700">Phone</th>
                                            <th class="font-w700">Email</th>
                                            <th class="font-w700">Created At</th>
                                            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 80px;">Cases</th>
                                            <th class="font-w700 text-center" style="width: 60px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($records as $midwife)
                                            <tr>
                                                <td>
                                                    <span class="font-w600">
                                                        {{ $loop->index + 1 }}
                                                    </span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <img class="img-avatar img-avatar32" src="{{ isset(Auth::guard('midwife')->user()->image) ? asset('uploads/img/midwives/' . Auth::guard('midwife')->user()->image) : asset('assets/media/avatars/avatar15.jpg.jpg') }}" alt="">
                                                </td>
                                                <td class="font-w600">
                                                    {{$midwife->fullname}}
                                                </td>
                                                <td class="font-w600">
                                                    {{$midwife->phone}}
                                                </td>
                                                <td class="font-w600">
                                                    {{$midwife->email}}
                                                </td>
                                                <td class="font-w600">
                                                    {{$midwife->created_at}}
                                                </td>
                                                <td class="font-w600 text-center">
                                                    {{$midwife->cases}}
                                                </td>
                                                <td class="text-center">

                                                    <div class="btn-group">
                                                        <a
                                                            href="{{ route('admin.midwives.edit', [$midwife->id]) }}"
                                                            class="btn btn-sm btn-light"
                                                            data-toggle="tooltip"
                                                            data-placement="left"
                                                            title="Edit {{ $midwife->fullname }}"
                                                        >
                                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                                        </a>

                                                        <form
                                                            action="{{ route('admin.midwives.destroy', $midwife->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Do you want to delete {{ $midwife->full_name }}?')"
                                                        >
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                type="submit"
                                                                class="btn btn-sm btn-light"
                                                                data-toggle="tooltip"
                                                                data-placement="left"
                                                                title="Delete {{ $midwife->full_name }}"
                                                            >
                                                                <i class="fa fa-fw fa-times"></i>
                                                            </button>
                                                        </form>

                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach

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

@endsection
