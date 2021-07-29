@extends('layouts.app')

@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    {{ $child->full_name }}
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
                            {{ $child->full_name }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content content-boxed">
        <div class="row">
            <div class="col-md-7 col-xl-8">

                <ul class="timeline timeline-alt py-0">
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-city">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Newborn Health Record</h3>
                            </div>
                            <div class="block-content">

                                @if(isset($child->newborn->birthday))

                                    @include('midwife.users.partials.newborn')

                                @else

                                    <a href="{{ route('midwife.create.newborn', $child->id) }}" class="btn btn-outline-success mr-1 mb-3">
                                        <i class="fa fa-fw fa-plus mr-1"></i>
                                        Add Newborn Health Record
                                    </a>

                                @endif

                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-smooth">
                            <i class="fas fa-child"></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Child Information</h3>
                            </div>
                            <div class="block-content">
                               <div class="row">

                                       <div class="col-6">
                                           <p class="font-w600 mb-2">
                                               Name
                                           </p>
                                           <p>
                                               {{$child->full_name}}
                                           </p>
                                       </div>
                                       <div class="col-6">
                                           <p class="font-w600 mb-2">
                                               Birthday
                                           </p>
                                           <p>
                                               {{$child->birthday}}
                                           </p>
                                       </div>

                               </div>
                                <div class="row">

                                    <div class="col-6">
                                        <p class="font-w600 mb-2">
                                            Birth Weight
                                        </p>
                                        <p>
                                            {{$child->birth_weight}}
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="font-w600 mb-2">
                                        Health Status
                                        </p>
                                        <p>
                                            {{$child->health_status}}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-modern">
                            <i class="si si-speedometer"></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Child Weight</h3>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter font-size-sm mb-0">
                                        <thead>
                                        <tr class="text-uppercase">

                                            <th class="font-w700">Year</th>
                                            <th class="font-w700">Month</th>
                                            <th class="font-w700">Weight</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($child->weights as $weight)
                                            <tr>
                                                <td class="font-w600">
                                                    {{ $weight->yesr }}
                                                </td>
                                                <td class="font-w600">
                                                    {{ $weight->created_at }}
                                                </td>
                                                <td class="font-w600">
                                                   {{ $weight->weight }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-amethyst">
                            <i class="fas fa-arrow-alt-circle-up"></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Child Height</h3>
                            </div>
                            <div class="block-content">
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter font-size-sm mb-0">
                                        <thead>
                                        <tr class="text-uppercase">

                                            <th class="font-w700">Year</th>
                                            <th class="font-w700">Height</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($child->heights as $height)
                                            <tr>
                                                <td class="font-w600">
                                                    {{ $height->created_at }}
                                                </td>
                                                <td class="font-w600">
                                                    {{ $height->height }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-primary">
                            <i class="si si-rocket "></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Child Head Circumference</h3>
                            </div>
                            <div class="block-content ">
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter font-size-sm mb-0">
                                        <thead>
                                        <tr class="text-uppercase">

                                            <th class="font-w700">Year</th>
                                            <th class="font-w700">Head Circumference</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($child->headMeasurements as $headMeasurement)
                                            <tr>
                                                <td class="font-w600">
                                                    {{ $headMeasurement->created_at }}
                                                </td>
                                                <td class="font-w600">
                                                    {{ $headMeasurement->head_circumference_measurements }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-gray-dark">
                            <i class="si si-calendar "></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Child BMI</h3>
                            </div>
                            <div class="block-content">
                                BMI
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="col-md-5 col-xl-4">

                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <i class="fas fa-child text-muted mr-1"></i> Children (count)
                        </h3>
                    </div>
                    <div class="block-content">
                        <ul class="nav-items font-size-sm">
                            <li>
                                <a class="media py-2" href="javascript:void(0)">
                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                        <img class="img-avatar img-avatar48" src="{{ asset('assets/media/avatars/avatar1.jpg') }}" alt="">
                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-w600">Judy Ford</div>
                                        <div class="font-w400 text-muted">Copywriter</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="media py-2" href="javascript:void(0)">
                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                        <img class="img-avatar img-avatar48" src="{{ asset('assets/media/avatars/avatar13.jpg') }}" alt="">
                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-w600">Adam McCoy</div>
                                        <div class="font-w400 text-muted">Web Developer</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="media py-2" href="javascript:void(0)">
                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                        <img class="img-avatar img-avatar48" src="{{ asset('assets/media/avatars/avatar8.jpg') }}" alt="">
                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-w600">Helen Jacobs</div>
                                        <div class="font-w400 text-muted">Web Designer</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
