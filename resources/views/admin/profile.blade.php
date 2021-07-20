@extends('layouts.app')

@section('content')

    <div class="bg-image" style="background-image: url({{ asset('assets/media/photos/photo8@2x.jpg') }});">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar13.jpg') }}" alt="">
                </div>
                <h1 class="h2 text-white mb-0">John Parker</h1>
                <span class="text-white-75">UI Designer</span>
            </div>
        </div>
    </div>

    <div class="bg-white border-bottom">
        <div class="content content-boxed">
            <div class="row items-push text-center">
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Sales</div>
                    <a class="link-fx font-size-h3" href="javascript:void(0)">17980</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Products</div>
                    <a class="link-fx font-size-h3" href="javascript:void(0)">27</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Followers</div>
                    <a class="link-fx font-size-h3" href="javascript:void(0)">1360</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="font-size-sm font-w600 text-muted text-uppercase mb-2">739 Ratings</div>
                    <span class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                    <span class="font-size-sm text-muted">(4.9)</span>
                </div>
            </div>
        </div>
    </div>

    <div class="content content-boxed">
        <div class="row">
            <div class="col-sm-12">

                <ul class="timeline timeline-alt py-0">
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-success">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Information</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item font-size-sm">
                                        just now
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">

                                {{-- Information Form --}}

                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-danger">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="timeline-event-block block invisible" data-toggle="appear">
                            <div class="block-header">
                                <h3 class="block-title">Change Password</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item font-size-sm">
                                        4 hrs ago
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full">

                                {{-- change password form --}}


                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection
