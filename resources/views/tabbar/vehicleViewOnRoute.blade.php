<table class = "table table-striped table-bordered" style="width:100%">
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
	<?php 
		$itemfilters = $vehicles->filter(function($item) {
			return $item->status == 'In use';
		});
	?>
	<tbody>
		@foreach($itemfilters as $vehicle)	
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
					<!-- <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> -->
						@if( $vehicle->is_new == 1)
							{{ 'Brand new' }}
						@else
							{{ 'Used' }}
						@endif
				</td>
				
				<td class="text-center">
					@if( $vehicle->status == 'In use')
						<div class="badge badge-primary">{{ $vehicle->status }} </div>
					@elseif( $vehicle->status == 'Ready to use')
						<div class="badge badge-success">{{ $vehicle->status }} </div>
					@elseif( $vehicle->status == 'Out of service')
						<div class="badge badge-danger">{{ $vehicle->status }} </div>
					@else
						<div class="badge badge-warning">{{ $vehicle->status }} </div>
					@endif
					
				</td>

				<td class="text-justify" style="width: 150px">
					@can('edit-users')
						<a href="{{ route('vehicle.vehicles.edit', $vehicle->id)}}">
							<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-warning" style ="float:left">
								<i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil-square-o"></i>
							</button>
						</a>
					@endcan
					
					
					@can('delete-users')
					<form action ="{{ route('vehicle.vehicles.destroy', $vehicle)}}" method = "POST" class="" >
						@csrf
						{{ method_field('DELETE') }}
						<button type="submit" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger" style=" margin-left:2px"> 
							<!-- <i class="pe-7s-trash btn-icon-wrapper"></i> -->
							<i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i>
						</button> 
						<!-- <div class="d-flex flex-row">
							<div class="p-2">Flex item 1</div>
							<div class="p-2">Flex item 2</div>
							<div class="p-2">Flex item 3</div>
						</div> -->
						
					</form>
					@endcan
				</td>
			</tr>
		@endforeach						
	</tbody>
	<tfooter>
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
	</tfooter>
</table>