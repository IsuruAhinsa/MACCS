<nav id="sidebar" aria-label="Main Navigation">

    <div class="content-header bg-white-5">

        <a class="font-w600 text-dual" href="{{ url('/') }}">
            <span class="smini-hide">
                <span class="font-w700 font-size-h5">{{ config('app.name') }}</span>
            </span>
        </a>

    </div>

    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link active" href="{{ url('/') }}">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>

            <li class="nav-main-heading">Main</li>

            @if(Auth::guard('admin')->check())

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-badge"></i>
                        <span class="nav-main-link-name">Midwives</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('admin.midwives.index') }}">
                                <span class="nav-main-link-name">All Midwives</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('admin.midwives.create') }}">
                                <span class="nav-main-link-name">Create Midwife</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-user-following"></i>
                        <span class="nav-main-link-name">Admins</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('admin.admins.index') }}">
                                <span class="nav-main-link-name">All Admins</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('admin.admins.create') }}">
                                <span class="nav-main-link-name">Create Admin</span>
                            </a>
                        </li>
                    </ul>
                </li>

            @elseif(Auth::guard('midwife')->check())

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-users"></i>
                        <span class="nav-main-link-name">Parents</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('midwife.users.index') }}">
                                <span class="nav-main-link-name">All Parents</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('midwife.users.create') }}">
                                <span class="nav-main-link-name">Create Parent</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                        <i class="nav-main-link-icon si si-envelope"></i>
                        <span class="nav-main-link-name">My Appointments</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                        <i class="nav-main-link-icon si si-calendar"></i>
                        <span class="nav-main-link-name">Create Appointment</span>
                    </a>
                </li>

            @else

                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('children.create') }}">
                        <i class="nav-main-link-icon si si-user-follow"></i>
                        <span class="nav-main-link-name">Create Children</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                        <i class="nav-main-link-icon si si-envelope"></i>
                        <span class="nav-main-link-name">My Appointments</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('appointments.create') }}">
                        <i class="nav-main-link-icon si si-calendar"></i>
                        <span class="nav-main-link-name">Create Appointment</span>
                    </a>
                </li>

            @endisset


            {{--
            <li class="nav-main-heading">Settings</li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-wrench"></i>
                    <span class="nav-main-link-name">User Settings</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                            <span class="nav-main-link-name">All Users</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                            <span class="nav-main-link-name">Create User</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                            <span class="nav-main-link-name">Disabled User</span>
                        </a>
                    </li>
                </ul>
            </li>--}}
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>
