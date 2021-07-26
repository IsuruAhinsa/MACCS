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

                                <a href="#" class="btn btn-outline-success mr-1 mb-3">
                                    <i class="fa fa-fw fa-plus mr-1"></i>
                                    Add Newborn Health Record
                                </a>

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
                                <p class="font-w600 mb-2">
                                    + 290 Page Likes
                                </p>
                                <p>
                                    This is great, keep it up!
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-modern">
                            <i class="fas fa-location-arrow"></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Location</h3>
                            </div>
                            <div class="block-content block-content-full">
                                <p class="font-w600 mb-2">
                                    3 New Products were added!
                                </p>
                                <div class="d-flex">
                                    <a class="item item-rounded bg-info mr-2" href="javascript:void(0)">
                                        <i class="si si-rocket fa-2x text-white-75"></i>
                                    </a>
                                    <a class="item item-rounded bg-amethyst mr-2" href="javascript:void(0)">
                                        <i class="si si-calendar fa-2x text-white-75"></i>
                                    </a>
                                    <a class="item item-rounded bg-city mr-2" href="javascript:void(0)">
                                        <i class="si si-speedometer fa-2x text-white-75"></i>
                                    </a>
                                </div>
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
