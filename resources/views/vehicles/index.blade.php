@extends('layouts.admin')

 @section('content')
<!--START:: SECTION TABS NAV-->
<div class="card-header">Fleet-Vehicles</div>
  <div class="row">
    <div class="col-lg-12">
      <div class="main-card mb-3 card">
        <div class="card-header">
            <ul class="nav nav-justified">
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">All views</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Assigned vehicles</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">On route vehicles</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-3" class="nav-link">Available vehicles</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-4" class="nav-link"> Broken vehicles</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-5" class="nav-link"> Out of service</a></li>
            </ul>
		</div>
        <div class="card-body" >
		<!-- <label for="type"> </label> -->
		<div class="btn-group "> 
			<div class="form-group col-md-4"  style="font-size:large; height:40px; width:640px;color:#ffffff; font-size: 17px; font-family: arial">
				<select id="Vehicule" class="form-control"  name="type" required>
					<option value="Truck" >All Vehicles</option>
					<option value="Truck" >BB-15</option>
					<option value="Car" >CJ-01</option>
					<option value="Bus" >CJ-28</option>
				</select>
				@error('type')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<select id="Vehicule" class="form-control"  name="type" required>
					<option value="Truck" >All Types</option>
					<option value="Car" >Truck</option>
					<option value="Bus" >Car</option>
					<option value="Bus" >Bus</option>
				</select>
				@error('type')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group col-md-4">
				<select id="Vehicule" class="form-control"  name="type" required>
					<option value="Truck" >All Affiliate</option>
					<option value="Car" >Dinasa</option>
					<option value="Bus" >Sodigaz</option>
					<option value="Bus" >Aviation</option>
				</select>
				@error('type')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
		
			</div>
		</div>

			<!-- <div class="btn-group btn btn-outline-success" style="font-size:large; height:40px; width:240px;color:#ffffff; font-size: 17px; font-family: arial"> 
				<button class="btn btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					All Vehicles
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item active" href="#">All Vehicles</a>
					<a class="dropdown-item" href="#">BB-15</a>
					<a class="dropdown-item" href="#">CJ-01</a>
					<a class="dropdown-item" href="#">CJ-28</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">DN-529</a>
				</div>
			</div> -->
			<!-- <div class="btn-group btn btn-outline-success" style="font-size:14px; margin-left:10px; height:40px; width:240px">
				<button class="btn btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					All Types
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item active" href="#">All Types</a>
					<a class="dropdown-item" href="#">Truck</a>
					<a class="dropdown-item" href="#">Car</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Bus</a>
				</div>
			</div> -->
			<!-- <div class="btn-group btn btn-outline-success" style="font-size:large;margin-left:10px; height:40px; width:240px">
				<button class="btn btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					All Affiliate
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item active" href="#">All Affiliate</a>
					<a class="dropdown-item" href="#">Dinasa</a>
					<a class="dropdown-item" href="#">Sodigaz</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Aviation</a>
				</div>
			</div> -->
			<div class="btn-group btn btn-outline-success" style="font-size:large; float: right">
				<button class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Clear
				</button>
			</div>
			</br></br></br>
			<div class="view view-cascade warning-card-header narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center" style=" background-color:#F3F3F3">

				<div>
				<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
					<i class="fas fa-th-large mt-0"></i>
				</button>
				<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
					<i class="fas fa-columns mt-0"></i>
				</button>
				</div>

				<a href="" class="white-text mx-3" style="font-size:17px; color: Black">Vehicles Assigned</a>

				<div>
				<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
					<i class="fas fa-pencil-alt mt-0"></i>
				</button>
				<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
					<i class="far fa-trash"></i>
				</button>
				<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
					<i class="fas fa-info-circle mt-0"></i>
				</button>
				</div>
			</div>

            <div class="tab-content ">
                <div class="tab-pane active" id="tab-eg7-0" role="tabpanel">
					
					@include('tabbar.vehicleViewsAll')
                </div>

                <div class="tab-pane" id="tab-eg7-1" role="tabpanel">
					@include('tabbar.vehicleViewAssgnement')
				</div>

                <div class="tab-pane" id="tab-eg7-2" role="tabpanel">
					@include('tabbar.vehicleViewOnRoute')
				</div>

                <div class="tab-pane" id="tab-eg7-3" role="tabpanel">
					@include('tabbar.vehicleViewAvailable')
				</div>

                <div class="tab-pane" id="tab-eg7-4" role="tabpanel">
					@include('tabbar.vehicleViewBroken')
				</div>

                <div class="tab-pane" id="tab-eg7-5" role="tabpanel">
					@include('tabbar.VehicleViewOutOfServ')
				</div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!--END:: SECTION TABS NAV-->

				   		
@endsection