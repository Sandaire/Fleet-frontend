@extends('layouts.admin')

@section('content')
<!-- Content -->
<div class="card-header">Shipments - Delivery Vehicle</div></br>
<div class="content row">
    <div class="col-md-6 col-xl-3">
      <div class="card mb-3 widget-content bg-bloom" style="background:orange">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Total All views</div>
                  <div class="widget-subheading">All vehicles delivered</div>
              </div>
              <div class="widget-content-right">
                  <div class="widget-numbers text-white"><span>28</span></div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="card mb-3 widget-content bg-bloom" style="background:#C6C3C3">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Total Pending</div>
                  <div class="widget-subheading">All pending vehicles</div>
              </div>
              <div class="widget-content-right">
                  <div class="widget-numbers text-white"><span>23</span></div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="card mb-3 widget-content bg-bloom" style="background:#008a74">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Total Progress</div>
                  <div class="widget-subheading">All vehicles in progress</div>
              </div>
              <div class="widget-content-right">
                  <div class="widget-numbers text-white"><span>6</span></div>
              </div>
          </div>
      </div>
    </div>

	<div class="col-md-6 col-xl-3">
      <div class="card mb-3 widget-content bg-bloom" style="background:#0383FF">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Total Ready</div>
                  <div class="widget-subheading">All ready vehicles </div>
              </div>
              <div class="widget-content-right">
                  <div class="widget-numbers text-white"><span>0</span></div>
              </div>
          </div>
      </div>
    </div>
  </div>
					  <div class="column content">
					  
							<div class="card-body">
								<!-- <div class="btn-group btn-warning" style="height:40px; width:240px; float: right;border-radius:4px"> 
									<button class="btn btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:17px; color:white">
									All Status 
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item active btn-success" href="#">All Status</a>
										<a class="dropdown-item" href="#">Pending</a>
										<a class="dropdown-item" href="#">In Progress</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Ready</a>
									</div> -->

									<!-- <select id="Vehicule" class="form-control"  name="type" required>
										<option value="Truck" >All Status </option>
										<option value="Car" >Pending</option>
										<option value="Bus" >In Progress</option><div class="dropdown-divider"></div>
										<option value="Bus" >Ready</option>
									</select>
									@error('type')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror -->
								<!-- </div> --> 
							<div class="row">
						<div class="col-lg-12">
							<div class="main-card mb-3 card">
								<div class="card-header">
									<ul class="nav nav-justified">
										<li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">All views</a></li>
										<li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Pending</a></li>
										<li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">In progress</a></li>
										<li class="nav-item"><a data-toggle="tab" href="#tab-eg7-3" class="nav-link">Ready</a></li>
										<!-- <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-4" class="nav-link"> Broken vehicles</a></li>
										<li class="nav-item"><a data-toggle="tab" href="#tab-eg7-5" class="nav-link"> Out of service</a></li> -->
									</ul>
								</div>
								
								<table class = "table">
							  <thead class="text-center">
								<tr>
								  <th scope="col">Loading</th>
								  <th scope="col">Vehicle</th>
								  <th scope="col">Position</th>
								  <th scope="col">Destination</th>
								  <th scope="col">Qty</th>
								  <th scope="col">Invoice #</th>
								  <th scope="col">Duration</th>
								  <th scope="col">Status</th>							
								</tr>	
							  </thead>
							 
							  <tbody>
								  @foreach($deliveries as $delivery)
									
									<tr>
									  <td><a href="{{ route('loading.loadings.show', $delivery->loading_id)}}">{{ 'See more' }}</a> </td>
									  <td>
											@foreach($loadings as $loading)
												@if($loading->id == $delivery->loading_id)
													@foreach($vehicles as $vehicle)
														@if($vehicle->id == $loading->vehicle_id)
														<i class="fa fa-bus" aria-hidden="true" style="color:orange">&nbsp&nbsp</i>{{ $vehicle->code }}
														@endif
													@endforeach
												@endif	
											@endforeach
									  </td>
									  <td style="width:240px">
											@foreach($loadings as $loading)
												@if($loading->id == $delivery->loading_id)
													@foreach($vehicles as $vehicle)
														@if($vehicle->id == $loading->vehicle_id)
														<i class="fa fa-map" aria-hidden="true" style="color:red"> &nbsp&nbsp</i>{{ $vehicle->position }}
														@endif
													@endforeach
												@endif	
											@endforeach
									  </td>
									  <td>
											@foreach($locations as $location)
												@if($location->id == $delivery->location_id)<center>
												<div class="" style="color:#0CCA28"><i class="fa fa-location-arrow" aria-hidden="true"></i>{{ $location->address }}</div>
</center>
												@endif
											@endforeach

									  </td>
									  <td>{{ $delivery->quantity }}</td>
									
									  <td>{{ $delivery->invnumber }}</td>
									  <td><center>
									  <div class="" style="color:blue"><i class="fa fa-clock" aria-hidden="true"></i>{{ $delivery->duration }}</div>
									</center>		
									  </td>
									   <!-- <td>{{ $delivery->status }}</td> -->
									 
									   <td class="text-center">
									  	@if( $delivery->status == 'Ready for delivery')
											<div class="badge badge-success">{{ $delivery->status }} </div>
										@elseif( $delivery->status == 'In progress')
											<div class="badge badge-warning">{{ $delivery->status }} </div>
										@else
											<div class="badge badge-danger">{{ $delivery->status }} </div>
										@endif  
									  </td>
									  
									 
									</tr>
								  @endforeach						
							  </tbody>
							</table>
							</div>

							
						</div>
					</div>
							
						</div>
					  </div> <!-- end content -->
					  @endsection