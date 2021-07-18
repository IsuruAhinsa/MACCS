@extends('admin')

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

        <div class="row">
            <div class="col-sm-12">

                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Hover Table</h3>
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
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td class="font-w600 font-size-sm">
                                    <a href="be_pages_generic_profile.html">Justin Hunt</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-danger">Disabled</span>
                                </td>
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
