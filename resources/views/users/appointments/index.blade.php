@extends('layouts.app')


@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Table Helpers <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Custom functionality to further enrich your tables.</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Tables</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Helpers</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Checkable Table</h3>
            </div>
            <div class="block-content">

                <table class="js-table-checkable table table-hover table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 70px;">
                            <div class="custom-control custom-checkbox custom-control-primary d-inline-block">
                                <input type="checkbox" class="custom-control-input" id="check-all" name="check-all">
                                <label class="custom-control-label" for="check-all"></label>
                            </div>
                        </th>
                        <th style="width: 30%;">Midwife</th>
                        <th class="d-none d-sm-table-cell" style="width: 5%;">Date</th>
                        <th class="d-none d-sm-table-cell" style="width: 5%;">Time</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Where</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Status</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <div class="custom-control custom-checkbox custom-control-primary d-inline-block">
                                <input type="checkbox" class="custom-control-input" id="row_1" name="row_1">
                                <label class="custom-control-label" for="row_1"></label>
                            </div>
                        </td>
                        <td class="font-size-sm">
                            <p class="font-w600 mb-1">
                                <a href="be_pages_generic_profile.html">Sara Fields</a>
                            </p>
                            <p class="text-muted mb-0">
                                Customer details and further information
                            </p>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-danger">Disabled</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <em class="font-size-sm text-muted">November 17, 2018 08:35</em>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>jQuery(function(){ One.helpers(['table-tools-checkable']); });</script>
@endpush
