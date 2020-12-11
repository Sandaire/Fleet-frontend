<div class="app-header header-shadow" style="background-color: #008a74; color: white">
            <div class="app-header__logo">
                <div class="logo-src">
                    <a class="navbar-brand" href="{{ url('/') }}" >
                        <!-- <img style="width:60px; height:50px; margin-top: -20px; box-shadow: 2px 2px 13px white;" src="{{ asset('images/dinasa_Logo.png') }}"> -->
                    </a>
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav ">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu ">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-warning btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6" style="background-color: #008a74;"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper" >
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon" >
                                <span> </span>
                            </button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                <span style="color: white"> Statistics </span>
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                <span style="color: white"> Projects </span>
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                <span style="color: white"> Settings </span>
                            </a>
                        </li>
                    </ul>        
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            @guest
                                                <a tabindex="0" class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                @if (Route::has('register'))
                                                    <a tabindex="0" class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                @endif
                                            @else
                                                <a tabindex="0" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >{{ __('Logout') }}</a>

                                                @can('manage-users')
                                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                                        User Management
                                                    </a>
                                                @endcan

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            @endguest
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div> 