@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">
					  
							<div class="card-body">
								<div class="btn-group btn-warning" style="height:40px; width:240px; float: right;border-radius:4px"> 
									<button class="btn btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:17px; color:white">
									All Status 
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item active btn-success" href="#">All Status</a>
										<a class="dropdown-item" href="#">Pending</a>
										<a class="dropdown-item" href="#">In Progress</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Ready</a>
									</div>
								</div>

							</br></br></br>

							<table class = "table">
							  <thead>
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
									
									<tr style="border-style: none none none groove; border-color:#B0C4DE; background-color:#F0F8FF;font-family:Arial;">
									  <td><a href="{{ route('loading.loadings.show', $delivery->loading_id)}}">{{ 'See more' }}</a> </td>
									  <td>
											@foreach($loadings as $loading)
												@if($loading->id == $delivery->loading_id)
													@foreach($vehicles as $vehicle)
														@if($vehicle->id == $loading->vehicle_id)
															{{ $vehicle->code }}
														@endif
													@endforeach
												@endif	
											@endforeach
									  </td>
									  <td>
											@foreach($loadings as $loading)
												@if($loading->id == $delivery->loading_id)
													@foreach($vehicles as $vehicle)
														@if($vehicle->id == $loading->vehicle_id)
															{{ $vehicle->position }}
														@endif
													@endforeach
												@endif	
											@endforeach
									  </td>
									  <td>
											@foreach($locations as $location)
												@if($location->id == $delivery->location_id)
													{{ $location->address }}
												@endif
											@endforeach

									  </td>
									  <td>{{ $delivery->quantity }}</td>
									
									  <td>{{ $delivery->invnumber }}</td>
									  <td>{{ $delivery->duration }}</td>
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
					  </div> <!-- end content -->
					  @endsection