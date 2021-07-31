@extends('layouts.app')

@section('content')


    <div class="bg-image" style="background-image: url({{ asset('assets/media/photos/photo8@2x.jpg') }});">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar13.jpg') }}" alt="">
                </div>
                <h1 class="h2 text-white mb-0">{{ $child->full_name }}</h1>
                <span class="text-white-75">{{ $child->birthday }}</span>
            </div>
        </div>
    </div>

    <div class="bg-white border-bottom">
        <div class="content content-boxed">
            <div class="row items-push text-center">
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Birthday</div>
                    <a class="link-fx font-size-h3" href="javascript:void(0)">{{ $child->birthday }}</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Date of Registration</div>
                    <a class="link-fx font-size-h3" href="javascript:void(0)">{{ $child->date_of_registration }}</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Birth Weight</div>
                    <a class="link-fx font-size-h3" href="javascript:void(0)">{{ $child->birth_weight }} Kg</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Health Status</div>
                    <a class="link-fx font-size-h3" href="javascript:void(0)">{{ $child->health_status }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content content-boxed">
        <div class="row">
            <div class="col-md-6 col-xl-6">

                @livewire('modal.weight.create', ['child_id' => $child->id])

                @include('users.children.partials.newborn')

                <div class="block block-themed">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <i class="fas fa-syringe mr-1"></i> Immunization Records
                        </h3>
                    </div>
                    <div class="block-content">
                        <table class="table table-sm table-vcenter table-borderless table-hover">
                            <thead>
                            <tr class="table-danger">
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Batch No</th>
                                <th>Immunization Age</th>
                                <th>Type of Vaccine</th>
                                <th>Date of Vaccine</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Adverse Effects</th>
                                <th class="text-center">BCG Scare</th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse($child->immunizations as $immunization)
                                <tr>
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="font-w600 font-size-sm">
                                        {{ $immunization->batch_no }}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        {{ $immunization->age }}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        {{ $immunization->type_of_vaccine }}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        {{ $immunization->date_of_vaccine }}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        {{ $immunization->adverse_effects_following_immunization }}
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        @if($immunization->type_of_vaccine == 'BCG')
                                            {{ $immunization->bcg_scare == 1 ? 'Yes' : 'No' }}
                                        @else
                                            -
                                        @endif
                                    </td>

                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
            <div class="col-md-6 col-xl-6">

                @livewire('modal.height.create', ['child_id' => $child->id])

                @livewire('modal.head-circumference.create', ['child_id' => $child->id])

            </div>
        </div>

        <div class="row">

            @if($chart)
                @include('users.children.partials.chart')
            @endif

        </div>

    </div>

@endsection

