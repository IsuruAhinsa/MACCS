@extends('layouts.app')

@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    All Parents
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="{{ url('/') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                           All Parents
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
                                <h3 class="block-title">       All Parents</h3>
                            </div>

                            <div class="block-content block-content-full">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                                        <thead class="thead-dark">
                                        <tr class="text-uppercase">
                                            <th class="font-w700" style="width: 80px;">ID</th>
                                            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 100px;">Photo</th>
                                            <th class="font-w700">Parent Type</th>
                                            <th class="font-w700">First Name</th>
                                            <th class="font-w700">Last Name</th>
                                            <th class="font-w700">Phone</th>
                                            <th class="font-w700">Email</th>
                                            <th class="font-w700">Created At</th>
                                            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 80px;">Children</th>
                                            <th class="font-w700 text-center" style="width: 60px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($records as $user)
                                            <tr>
                                                <td>
                                                    <span class="font-w600">
                                                        {{ $loop->index + 1 }}
                                                    </span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                                                </td>
                                                <td class="font-w600">
                                                    {{$user->parent_type}}
                                                </td>
                                                <td class="font-w600">
                                                    {{$user->first_name}}
                                                </td>
                                                <td class="font-w600">
                                                    {{$user->last_name}}
                                                </td>
                                                <td class="font-w600">
                                                    {{$user->phone}}
                                                </td>
                                                <td class="font-w600">
                                                    {{$user->email}}
                                                </td>
                                                <td class="font-w600">
                                                    {{$user->created_at}}
                                                </td>
                                                <td class="font-w600 text-center">
                                                    {{$user->no_of_children}}
                                                </td>                                                {{--<td class="text-center">
                                                    <a href="{{ route('midwives.edit', $midwife->id) }}" data-toggle="tooltip" data-placement="left" title="Edit">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="{{ route('midwives.destroy', $midwife->id) }}" data-toggle="tooltip" data-placement="left" title="Delete">
                                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                                    </a>
                                                </td>--}}
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
