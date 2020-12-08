<div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src">
                           
                        </div>
                        <div class="header__pane ml-auto"  >
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
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div> 

                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li>
                                    <a href="{{ route('home') }}" class="mm-active" style="">
                                        <i class="material-icons pe-7s-rocket"></i>
                                        <img style="width:150px" src="{{ asset('images/logo_national.png') }}">
                                    </a>
                                    <a href="#/sodigaz">
                                        <i class="mi mi-face pe-7s-rocket"></i>
                                        <img style="width:150px" src="{{ asset('images/logo_sodigaz.png') }}">
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Vehicles</li>
                                <li>
                                    <a href="{{ route('vehicle.vehicles.index') }}" >
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        My fleet
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <a href="#" >
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Unoccupied vehicles
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                </li>
                                @can('manage-users')
                                <li class="app-sidebar__heading">Loading order</li>
                                    <li>
                                        <a href="{{ route('loading.loadings.index') }}">
                                            <i class="metismenu-icon pe-7s-display2"></i>
                                            Loading list
                                        </a>
                                        <a href="{{ route('delivery.deliveries.index') }}">
                                            <i class="metismenu-icon pe-7s-display2"></i>
                                            Shipments
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading">Administration</li>
                                    <li>
                                        <a href="{{ route('admin.users.index') }}">
                                            <i class="metismenu-icon pe-7s-mouse">
                                            </i>Users
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.companies.index') }}">
                                            <i class="metismenu-icon pe-7s-eyedropper">
                                            </i>Company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#/location">
                                            <i class="metismenu-icon pe-7s-pendrive">
                                            </i>Location
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon pe-7s-pendrive">
                                            </i>Roles
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon pe-7s-pendrive">
                                            </i>Permissions
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading">Analytics</li>
                                    <li>
                                        <a href="/overview">
                                            <i class="metismenu-icon pe-7s-graph2">
                                            </i>Overview
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/realtime">
                                            <i class="metismenu-icon pe-7s-graph2">
                                            </i>Real Time Data
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading">Settings</li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="metismenu-icon pe-7s-graph2">
                                            </i>
                                            System
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="metismenu-icon pe-7s-graph2">
                                            </i>
                                            Maintenance Planner
                                        </a>
                                    </li>
                                </li>  
                                @endcan 
                                <li class="mm-active">
                                    <a href="#about" class="mm-active" style="background-color: seagreen; color: white">
                                        <i class=""></i>
                                        User guide
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>