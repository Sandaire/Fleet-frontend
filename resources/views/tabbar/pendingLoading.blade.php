
<table class = "table" style="width:100%">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Vehicle</th>
			<th scope="col">Terminal</th>
			<th scope="col">Start date</th>
			<th scope="col"> Step</th>
			<th scope="col" class="text-center">Status</th>
			<th scope="col" class="text-center">Action</th>
		</tr>
	</thead>
	<?php 
			$itemfilters = $loadings->filter(function($item) {
				return $item->status == 'Pending';
			});
		?>
	<tbody>
								  @foreach($itemfilters as $loading)
									
									<tr>
									  <td ><a href="{{ route('loading.loadings.show', $loading->id)}}">{{ $loading->id }}</a> </td>
									  <td>
											@foreach($vehicles as $vehicle)
												@if($vehicle->id == $loading->vehicle_id)
													{{ $vehicle->code }}
												@endif
											@endforeach
									  </td>
									  <td>{{ $loading->terminal }} </td>
									  <td>
											@if($loading->start_date == '')
												 {{ 'Not indicated' }}
											@else
												{{ $loading->start_date }}
											@endif
									   </td>
									  <td>
										
										@if($loading->step == '')
												 {{ '-' }}
											@else
												{{ $loading->step }}
											@endif
									  </td>
										
									  <td class="text-center">
									  	@if( $loading->status == 'Ready for delivery')
											<div class="badge badge-success">{{ $loading->status }} </div>
										@elseif( $loading->status == 'In progress')
											<div class="badge badge-warning">{{ $loading->status }} </div>
										@else
											<div class="badge badge-danger">{{ $loading->status }} </div>
										@endif  
									  </td>
									  <td class="text-justify" style="width: 150px">
											@can('edit-users')
												<a href="{{ route('loading.loadings.edit', $loading->id)}}">
													<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-warning" style ="float:left">
														<i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil-square-o"></i>
													</button>
												</a>
											@endcan
											
											@can('delete-users')
											<form action ="{{ route('loading.loadings.destroy', $loading)}}" method = "POST" class="" >
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
		<th scope="col">ID</th>
			<th scope="col">Vehicle</th>
			<th scope="col">Terminal</th>
			<th scope="col">Start date</th>
			<th scope="col"> Step</th>
			<th scope="col">Status</th>
			<th scope="col">Action</th>
		</tr>
	</tfooter>
</table>