@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">						
							
							<div class="card-body">
							
								<form method="POST" action="">
									<div class="form-group row">
										<label for="invnumber" class="col-md-4 col-form-label text-md-right"></label>
										<div class="col-md-6">
										{{ __('Start date') }}: <a href="#">{{ $loading->created_at }}</a> 
										</div>
									</div>
									<div class="form-group row">
										<label for="vehicle" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle') }}</label>
										<div class="col-md-6">
											<input id="vehicle" type="string" class="form-control @error('vehicle') is-invalid @enderror" value= "{{ $vehicle->code }}" name="vehicle">
										</div>
									</div>

									<div class="form-group row">
										<label for="terminal" class="col-md-4 col-form-label text-md-right">{{ __('Terminal') }}</label>
										<div class="col-md-6">
											<input id="terminal" type="string" class="form-control @error('terminal') is-invalid @enderror" value= "{{ $loading->terminal }}" name="terminal">
										</div>
									</div>

									<div class="form-group row">
										<label for="note" class="col-md-4 col-form-label text-md-right">{{ __('Note') }}</label>
										
										<div class="col-md-6">
											<input id="note" type="string" class="form-control @error('note') is-invalid @enderror" value= "{{ $loading->note }}" name="note">
										</div>
									</div>
									
									<div class="form-group row">
										<label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
										<div class="col-md-6">
											<input id="status" type="string" class="form-control @error('status') is-invalid @enderror" value= "{{ $loading->status }}" name="status">
										</div>
									</div>
									
								</form>
								@if($loading->status != 'Completed')
									<a href="/addDelivery"><button type="button" class="btn btn-success" style="float:right"> + Add delivery</button></a>	
									<a href="{{ route('loading.loadings.edit', $loading->id)}}" style="float:right">Edit loading</button></a>
								@endif
								

								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Destination</th>
											<th> Qty</th>
										    <th>Invoice #</th>
										    <th>Status</th>
										    <th>Action</th>
										 </tr>
									</thead>
									<tbody>
										@foreach($deliveries as $delivery)
											@if($delivery->loading_id == $loading->id)
												<tr>
													<td> {{$delivery->location->PlaceDescription }}</td>						 
													<td> {{ $delivery->quantity }}</td>						 
													<td> {{ $delivery->invnumber }}</td>						 
													<td> {{ $delivery->status }}</td>						 
													<td> 
														@can('edit-users')
															<a href="{{ route('delivery.deliveries.edit', $delivery->id)}}"><button class="btn btn-primary" style ="float:left">Edit</button></a>
															
															@can('delete-users')
															  <form action ="{{ route('delivery.deliveries.destroy', $delivery)}}" method = "POST" class="" >
																@csrf
																{{ method_field('DELETE') }}
																<button type="submit" class="btn btn-danger" style ="float:left">Remove</button> 
																
															  </form>
															  @endcan
														@endcan
													</td>						 
												</tr>
											@endif
											
										 @endforeach
									 </tbody>
									
							   </table>
								
							
							</div>
					  </div> <!-- end content -->
				
@endsection
