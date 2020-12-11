<div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src">
                        Fleet Dinasa
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
                                    <a href="{{ route('home') }}" class="active">
                                        <img style="width:40px" src="{{ asset('images/logo_national.png') }}">
                                    </a>
                                    <a href="#/sodigaz" style="margin-top: -40px; margin-left: 60px">
                                        <img style="width:150px" src="{{ asset('images/logo_sodigaz.png') }}">
                                    </a>
                                </li>
                                <li class="app-sidebar__heading" style="color: #008a74;">Vehicles</li>
                                <li>
                                    <a href="{{ route('vehicle.vehicles.index') }}" style="color: #008a74;" >
                                    <i class="fa fa-bus" aria-hidden="true" title="Copy to use bus"> </i>
                                        My fleet
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <a href="#" >
                                    <i class="fa fa-truck" aria-hidden="true" title="Copy to use truck" style="color: #008a74;"> </i>
                                        Unoccupied vehicles
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                </li>
                                @can('manage-users')
                                <li class="app-sidebar__heading" style="color: #008a74;">Loading order</li>
                                    <li>
                                        <a href="{{ route('loading.loadings.index') }}">
                                        <i class="fa fa-list" aria-hidden="true" title="Copy to use list" style="color: #008a74;"> </i>
                                            Loading list
                                        </a>
                                        <a href="{{ route('delivery.deliveries.index') }}">
                                        <i class="fa fa-bus" aria-hidden="true" title="Copy to use bus" style="color: #008a74;"> </i>
                                            Shipments
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading" style="color: #008a74;">Administration</li>
                                    <li>
                                        <a href="{{ route('admin.users.index') }}">
                                        <i class="fa fa-users" aria-hidden="true" title="Copy to use users" style="color: #008a74;"> </i>
                                            </i>Users
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.companies.index') }}">
                                        <i class="fa fa-building" aria-hidden="true" title="Copy to use building" style="color: #008a74;"> </i>
                                            </i>Company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#/location">
                                        <i class="fa fa-map" aria-hidden="true" title="Copy to use map" style="color: #008a74;"> </i>
                                            </i>Location
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <i class="fa fa-tags" aria-hidden="true" title="Copy to use tags" style="color: #008a74;"> </i>
                                            </i>Roles
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <i class="fa fa-bus" aria-hidden="true" title="Copy to use bus" style="color: #008a74;"> </i>
                                            </i>Permissions
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading" style="color: #008a74;">Analytics</li>
                                    <li>
                                        <a href="/overview">
                                        <i class="fa fa-pie-chart" aria-hidden="true" title="Copy to use pie chart"> </i>
                                            </i>Overview
                                        </a>
                                    </li>
                                    <li style="color: #008a74;">
                                        <a href="/realtime">
                                        <i class="fa fa-bus" aria-hidden="true" title="Copy to use bus"> </i>
                                            </i>Real Time Data
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading" style="color: #008a74;">Settings</li>
                                    <li>
                                        <a href="#" target="_blank">
                                        <i class="fa fa-bus" aria-hidden="true" title="Copy to use bus"> </i>
                                            System
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                        <i class="fa fa-settings" aria-hidden="true" title="Copy to use settings"> </i>
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