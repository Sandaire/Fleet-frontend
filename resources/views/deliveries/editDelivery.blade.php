@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">						
							<div class="card-body">
								<form method="POST" action="{{ route('delivery.deliveries.update', $delivery) }}">
									@csrf
									
									@method('PUT')
									<div class="form-group row">
										<label for="invnumber" class="col-md-4 col-form-label text-md-right">{{ __('Invoice') }}</label>

										<div class="col-md-6">
											<input id="invnumber" type="string" class="form-control @error('invnumber') is-invalid @enderror" value= "{{ $delivery->invnumber }}" name="invnumber" >

											@error('invnumber')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="destination" class="col-md-4 col-form-label text-md-right">{{ __('Destination') }}</label>

										<div class="col-md-6">
												<select name="location" id= "location" class="form-control location_id" required>
													<option  value="{{ $delivery->location->id }}">{{ $delivery->location->PlaceDescription }}</option>
												  @foreach($locations as $location)
													@if($delivery->location->id != $location->id ){
														<option  value="{{ $location->id }}">{{ $location->PlaceDescription }}</option>
														
													}@endif
													
													@endforeach
												</select>
													@error('location')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
										</div>
									</div>
									<div class="form-group row">
										<label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Quantity') }}</label>

										<div class="col-md-6">
											<input id="quantity" type="string" class="form-control @error('quantity') is-invalid @enderror" value= "{{ $delivery->quantity }}" name="quantity" required autocomplete="quantity" >

											@error('quantity')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									

									<div class="form-group row">
										<label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

										<div class="col-md-6">
										 <select name="status" id="status">
											  
											  <option value=""></option>
											  <option value="Delivered">Delivered</option>
											  <option value="Void">Void</option>
											</select>
											@error('terminal')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="note" class="col-md-4 col-form-label text-md-right">{{ __('Note') }}</label>

										<div class="col-md-6">
											<textarea id="note" class="form-control @error('note') is-invalid @enderror" name="note"> {{ $delivery->note }}</textarea>
											@error('note')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									<div class="form-group row mb-0">
										<div class="col-md-6 offset-md-4">
											<button type="submit" class="btn btn-primary">
												{{ __('Update') }}
											</button>
											<button type="text" class="btn btn-default">
												{{ ('Cancel') }}
											</button>
										</div>
									</div>
								</form>
							
							</div>
					  </div> <!-- end content -->
				
@endsection
