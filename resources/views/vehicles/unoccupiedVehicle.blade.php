@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">
						<a href="{{ route('vehicle.vehicles.create') }}"><button type="button" class="btn btn-primary" style= "float:right"> + New vehicle</button></a>

							<div class="card-body">
							
							<table class = "table">
							  <thead>
								<tr>
								  <th scope="col">Vehicle</th>
								  <th scope="col">Position</th>
								  <th scope="col">Immat</th>
								  <th scope="col">Number of tanks</th>
								  <th scope="col">Capacity</th>
								  <th scope="col">Condition</th>
								  <th scope="col">Status</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>
								  @foreach($vehicles as $vehicle)
									@if($vehicle->status == 'Unoccupied')
									<tr>
									  <td><a href="{{ route('vehicle.vehicles.show', $vehicle->id)}}">{{ $vehicle->code }}</a> </td>
									   <td>
											@if( $vehicle->position  == "")
												{{ 'Not indicated' }}
											@else
												{{ $vehicle->position }}
											@endif
									   </td>
									  <td>{{ $vehicle->immat }} </td>
									  <td>{{ $vehicle->n_citerne }} </td>
									  <td>{{ $vehicle->capacity }} </td>
									  <td>
											@if( $vehicle->is_new == 1)
												{{ 'Brand new' }}
											@else
												{{ 'Used' }}
											@endif
									   </td>
									 
									  <td>{{ $vehicle->status }} </td>
									  <td>
									  @can('edit-users')
										<a href="{{ route('vehicle.vehicles.edit', $vehicle->id)}}"><button class="" style ="float:left">Edit</button></a>
									  @endcan
									  
									  
									  @can('delete-users')
									  <form action ="{{ route('vehicle.vehicles.destroy', $vehicle)}}" method = "POST" class="" >
										@csrf
										{{ method_field('DELETE') }}
										<button type="submit" class="">Delete</button> 
										<button type="reset" class="" > Change status</button> </td>
									  </form>
									  @endcan
									 
									</tr>
								  @endforeach						
								  @endif						
							  </tbody>
							</table>
						</div>
					  </div> <!-- end content -->
					  @endsection