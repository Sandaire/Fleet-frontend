@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">
					  
							<div class="card-body">
							
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
									
									<tr>
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
									   <td>{{ $delivery->status }}</td>
									 
									  
									  
									 
									</tr>
								  @endforeach						
							  </tbody>
							</table>
						</div>
					  </div> <!-- end content -->
					  @endsection