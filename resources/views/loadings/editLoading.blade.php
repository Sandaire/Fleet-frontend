@extends('layouts.admin')

				  @section('content')
					<!-- Content -->
					<div class="card-header">Edit Loading vehicles</div></br>
					  <div class="column content">						
							
							<div class="card-body" style="border-style: solid; border-radius:20px; width:800px; margin-left: 210px; border-color: #A9A9A9; background-color:white">
							<img style="width:140px; float: bottom; margin-top: 60px " src="{{ asset('images/truck-available.png') }}">
								<form method="POST" action="{{ route('loading.loadings.update', $loading) }}">
									@csrf
									
									@method('PUT')
									<div class="form-group row" style="margin-top:-158px">
										<label for="vehicle" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle') }}</label>

										<div class="col-md-6">
											<div class="form-select">
												<select name="vehicle" id="vehicle">
												<option  value="{{ $loading->vehicle_id }}" selected>{{ $loading->vehicle_id }}</option>
												  @foreach($vehicle as $vhcl)
														@if($loading->vehicle_id != $vhcl->id)
															<option  value="{{ $vhcl->id }}" selected>{{ $vhcl->code }}</option>
														@endif
															
													@endforeach
												</select>
													@error('vehicle')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
											</div>
										</div>
										
									</div>


									<div class="form-group row">
										<label for="terminal" class="col-md-4 col-form-label text-md-right">{{ __('Terminal') }}</label>

										<div class="col-md-6">
											<select name="terminal" id="terminal" required>
											  <option value="Thor" @if($loading->terminal == 'Thor') {{'selected'}} @endif > Thor</option>
											  <option value="Varreux" @if($loading->terminal == 'Varreux') {{'selected'}} @endif >Varreux</option>
											  <option value="Aviation" @if($loading->terminal == 'Aviation') {{'selected'}} @endif >Aviation</option>
											</select>
											@error('terminal')
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
											  <option value="Completed">Completed</option>
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
											<textarea id="note" class="form-control @error('note') is-invalid @enderror" name="note"> {{ $loading->note }}</textarea>
											@error('note')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									<div class="form-group row mb-0">
										<div class="col-md-6 offset-md-4">
											<button type="submit" class="btn btn-success" style="border-radius:20px; width: 150px">
												{{ __('Update') }}
											</button>
											<button type="text" class="btn btn-outline-danger" style="height:40px; color:black; font-size: 20px; font-family: arial; border-radius:100%">
											<i class="fa fa-times" aria-hidden="true" style="margin-top:3px"></i>
												<!-- {{ ('Cancel') }} -->
											</button>
										</div>
									</div>
								</form>
							
							</div>
					  </div> <!-- end content -->
				
@endsection
