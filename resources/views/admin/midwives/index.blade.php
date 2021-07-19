@extends('admin')

@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    All Midwives
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Midwives</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="row">
            <div class="col-sm-12">

                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">All Midwives</h3>
                        <div class="block-options">
                            <div class="block-options-item">
                                <code>.table-hover</code>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-hover table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>NIC</th>
                                <th>Address</th>
                                <th>Cases</th>
                                <th>Password</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                               {{-- <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>--}}
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td class="font-w600 font-size-sm">Justin Hunt</td>
                                <td class="font-w600 font-size-sm">Last Name</td>
                                <td class="font-w600 font-size-sm">Phone</td>
                                <td class="font-w600 font-size-sm">Email</td>
                                <td class="font-w600 font-size-sm">NIC</td>
                                <td class="font-w600 font-size-sm">Address</td>
                                <td class="font-w600 font-size-sm">Cases</td>
                                <td class="font-w600 font-size-sm">Password</td>
                                <td class="font-w600 font-size-sm">Created At</td>
                                <td class="font-w600 font-size-sm">Updated At</td>
                                {{--<td class="d-none d-sm-table-cell">
                                    <span class="badge badge-danger">Disabled</span>
                                </td>--}}
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Client">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Remove Client">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
