<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" class="header-brand-img" alt="{{ config('app.name') }} logo">
                Energy
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown d-none d-md-flex">
                    @auth
                        <a class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-bell"></i>
                            <span class="nav-unread"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a href="#" class="dropdown-item d-flex">
                            <span class="avatar mr-3 align-self-center"
                                  style="background-image: url(https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png)"></span>
                                <div>
                                    You have exceeded your energy consymption threshold.
                                    <div class="small text-muted">10 minutes ago</div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                        </div>
                    @endauth
                </div>
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown" aria-expanded="false">
                        @guest
                            <span class="avatar"
                                  style="background-image: url(https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png)"></span>
                            <span class="ml-2 d-none d-lg-block">
                              <span class="text-default">{{ session('guest_username') }}</span>
                              <small class="text-muted d-block mt-1">Guest</small>
                            </span>
                        @else
                            <span class="avatar"
                                  style="background-image: url(https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png)"></span>
                            <span class="ml-2 d-none d-lg-block">
                              <span class="text-default">{{ auth()->user()->username }}</span>
                              <small class="text-muted d-block mt-1">{{ auth()->user()->role }}</small>
                            </span>
                        @endguest
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="bottom-end"
                         style="position: absolute; transform: translate3d(136px, 32px, 0px); top: 0px; left: 0px; will-change: transform;">
                        @guest
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="dropdown-icon fe fe-log-in"></i> {{ __('Login') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('register') }}">
                                <i class="dropdown-icon fe fe-user-plus"></i> {{ __('Register') }}
                            </a>
                        @else
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-user"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-grid"></i> My energy
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-settings"></i> Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="float-right"><span class="badge badge-primary">6</span></span>
                                <i class="dropdown-icon fe fe-mail"></i> Inbox
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="dropdown-icon fe fe-log-out"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0 collapsed" data-toggle="collapse"
               data-target="#headerMenuCollapse" aria-expanded="false">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>