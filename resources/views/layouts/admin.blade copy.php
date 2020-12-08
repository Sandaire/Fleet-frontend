@extends('layouts.app')

	<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  padding: 10px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.menu {
  width: 25%;
}

.content {
  width: 75%;
}


}
</style>


@section('content')
    <div class="" style="margin-left:-270px; margin-top:-55px">
        <div class="">
            <div class="card-body">
                <!-- <div class="card-header">Panel user admin</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					
					<!-- Top Navigation Menu -->					
				
				<div class="clearfix">
				  <div class="column menu">
					<ul>
							  <li><a>Dashboard </a>
								<ul>
								  <li>
									<a class="" href="{{ route('home') }}">
											National
									</a>
								  </li>
								  <li>
									<a class="#" href="#">
										Sodigaz
									</a>
								  </li>
								  
								</ul>
							  </li>
							  <li><a>Vehicles</a>
								<ul>
								  <li>
									<a class="" href="{{ route('vehicle.vehicles.index') }}">
											My fleet
									</a>
								  </li>
								  <li>
									<a class="#" href="#">
											Unoccupied vehicles
									</a>
								  </li>
								</ul>
							 </li>
							   @can('manage-users')
							  <li><a>Loading order</a>
								<ul>
								  <li>
									<a class="" href="{{ route('loading.loadings.index') }}">
											Loading list
									</a>
								  </li>
								  <li>
									<a class="" href="{{ route('delivery.deliveries.index') }}">Shipments</a> 
								  </li>
								</ul>
							  </li>
							  <li><a>Administration</a>
								<ul>
								  <li>
									<a class="" href="{{ route('admin.users.index') }}">
											Users
									</a>
								  </li>
								  <li>
									<a class="#" href="{{ route('admin.companies.index') }}">
											Company
									</a>
								  </li>
								  <li>
									<a class="#" href="#">
											Locations
									</a>
								  </li>
								
								  <li>
									<a class="#" href="#">
											Roles
									</a>
								  </li>
								  <li>
									<a class="#" href="#">
											Permissions
									</a>
								  </li>
								</ul>
							  </li>
							  <li><a> Analytics</a>
								<ul>
								  <li>
									<a  href="#">
											Overview
									</a>
								  </li>
								  <li>
									<a  href="#">
											Real Time Data
									</a>
								  </li>
								</ul>
							  </li>
							  <li><a> Settings</a>
								<ul>
								  <li>
									<a class="" href="#">
											System
									</a>
								  </li>
								  <li>
									<a class="" href="#">
											Maintenance Planner
									</a>
								  </li>
								  
								</ul>
							  </li>
							  @endcan
							  <li><a href="#about"> User guide</a></li>
							</ul>
				  </div> <!-- end menu -->
				 
					<!-- Content -->
					@yield('panel')
					
				</div>
					
				</div>
												
        </div>
    </div>
@endsection












