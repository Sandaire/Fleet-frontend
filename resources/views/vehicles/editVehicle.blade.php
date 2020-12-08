@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">						
							<div class="card-body">
							
							<form action="{{ route('vehicle.vehicles.update', $vehicle)}}" method="POST">
							@csrf
						
							@method('PUT')
						
									<div class="form-group row">
										<label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}</label>

										<div class="col-md-6">
											<input id="brand" type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{ $vehicle->brand }}" required autocomplete="brand" autofocus>

											@error('brand')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>

										<div class="col-md-6">
											<input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ $vehicle->model }}" required autocomplete="model" autofocus>

											@error('model')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>

										<div class="col-md-6">
											<input id="code" type="code" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ $vehicle->code }}" required autocomplete="code">

											@error('code')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="immat" class="col-md-4 col-form-label text-md-right">{{ __('Immatricule') }}</label>

										<div class="col-md-6">
											<input id="immat" type="text" class="form-control @error('immat') is-invalid @enderror" name="immat" value = "{{ $vehicle->immat }}"required autocomplete="immat">

											@error('immat')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

										<div class="col-md-6">
											<input id="year" type="number" min="1900" max="2099" class="form-control" name="year"  value= "{{ $vehicle->year }}" required autocomplete="year">
											
											@error('year')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									<div class="form-group row">
										<label for="vin" class="col-md-4 col-form-label text-md-right">{{ __('Vin') }}</label>

										<div class="col-md-6">
											<input id="vin" type="text" class="form-control" name="vin" value= "{{ $vehicle->vin }}" required autocomplete="vin">
											
											@error('vin')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									<div class="form-group row">
										<label for="odometer" class="col-md-4 col-form-label text-md-right">{{ __('odometer') }}</label>

										<div class="col-md-6">
											<input id="odometer" type="text" class="form-control" name="odometer" value= "{{ $vehicle->odometer }}" required autocomplete="odometer">
											
											@error('odometer')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									<div class="form-group row">
										<label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>

										<div class="col-md-6">
											<input id="color" type="text" class="form-control" name="color" value= "{{ $vehicle->color }}" required autocomplete="color">
											
											@error('color')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									<div class="form-group row">
										<label for="n_citerne" class="col-md-4 col-form-label text-md-right">{{ __('Citerne') }}</label>

										<div class="col-md-6">
											<input id="n_citerne" type="text" class="form-control" value= "{{ $vehicle->n_citerne }}"  name="n_citerne" required autocomplete="n_citerne">
											
											@error('n_citerne')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									<div class="form-group row">
										<label for="capacity" class="col-md-4 col-form-label text-md-right">{{ __('Capacity') }}</label>

										<div class="col-md-6">
											<input id="capacity" type="text" class="form-control" name="capacity" value= "{{ $vehicle->capacity }}"  required autocomplete="capacity">
											
											@error('capacity')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									
									<div class="form-group row">
										<label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

										<div class="col-md-6">
											<select name="type" id="type" required>
											  <option value="Truck" >Truck</option>
											  <option value="Car" >Car</option>
											  <option value="Bus" >Bus</option>
											</select>
											
											@error('type')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									<div class="form-group row">
										<label for="condition" class="col-md-4 col-form-label text-md-right">{{ __('Condition') }}</label>

										<div class="col-md-6">
											<select name="is_new" id="is_new" >
											  <option value=1 >Brand new</option>
											  <option value=0 >Used</option>
											</select>
											@error('is_new')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									
									<div class="form-group row">
										<label for="companies" class="col-md-4 col-form-label text-md-right">Fleet company</label>
										<div class="col-md-6">
											
												<div class="form-select">
													<select name="company" id= "company">
													  @foreach($company as $cmp)
														<option name="" value="{{ $cmp->id }}">{{ $cmp->name }}</option>
													 @endforeach
													</select>
												</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="affiliate" class="col-md-4 col-form-label text-md-right">{{ __('Affiliate to') }}</label>
										
										<div class="col-md-6">
												<select name="affiliate" id="affiliate" >
												  <option value="{{ $vehicle->affiliate }}" @if($vehicle->affiliate == 'DINASA')  {{'SELECTED'}} @endif >DINASA</option>
												  <option value="{{ $vehicle->affiliate }}" @if($vehicle->affiliate == 'SODIGAZ') {{'SELECTED'}} @endif>SODIGAZ</option>
												  <option value="{{ $vehicle->affiliate }}" @if($vehicle->affiliate == 'AVIATION'){{'SELECTED'}} @endif>AVIATION</option>
												</select>
											
											@error('affiliate')
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
											  
											  <option value="{{ $vehicle->status }}">{{ $vehicle->status }}</option>
											  <option value="Unoccupied">Unoccupied</option>
											  <option value="Out of service">Out of service</option>
											</select>
											@error('terminal')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									<div class="form-group row mb-0">
										<div class="col-md-6 offset-md-4">
											<button type="submit" class="btn btn-primary">
												{{ 'Update' }}
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
