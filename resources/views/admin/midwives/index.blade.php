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
                <div class="row row-deck">
                    <!-- Latest Customers -->
                    <div class="col-lg-12">
                        <div class="block block-mode-loading-oneui">
                            <div class="block-header border-bottom">
                                <h3 class="block-title">All Midwives</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                                    <thead class="thead-dark">
                                    <tr class="text-uppercase">
                                        <th class="font-w700" style="width: 80px;">ID</th>
                                        <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 100px;">Photo</th>
                                        <th class="font-w700">First Name</th>
                                        <th class="font-w700">Last Name</th>
                                        <th class="font-w700">Phone</th>
                                        <th class="font-w700">Email</th>
                                        <th class="font-w700">Created At</th>
                                        <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 80px;">Cases</th>
                                        <th class="font-w700 text-center" style="width: 60px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($recorders as $midwife)
                                    <tr>
                                        <td>
                                            <span class="font-w600">#</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                                        </td>
                                        <td class="font-w600">
                                            {{$midwife->first_name}}
                                        </td>
                                        <td class="font-w600">
                                            {{$midwife->last_name}}
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
                                        <td class="d-none d-sm-table-cell text-center">
                                            <a class="link-fx font-w600" href="javascript:void(0)">{{$midwife->cases}}</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Latest Customers -->
                </div>

            </div>
        </div>

    </div>





@endsection
