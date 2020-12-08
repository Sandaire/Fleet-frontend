@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">						
							<div class="card-body">
								<form method="POST" action="">
									
									<div class="form-group row">
										<label for="invnumber" class="col-md-4 col-form-label text-md-right"></label>
										<div class="col-md-6">
										{{ __('Loading') }}:<a href="#">{{$delivery->loading->id}}</a> - Vehicle:<a href="#"> {{$delivery->loading->vehicle->code}}</a> - Terminal:<a href="#"> {{$delivery->event->terminal}}</a>
										</div>
									</div>
									<div class="form-group row">
										<label for="invnumber" class="col-md-4 col-form-label text-md-right">{{ __('Invoice') }}</label>
										<div class="col-md-6">
											<input id="invnumber" type="string" class="form-control @error('invnumber') is-invalid @enderror" value= "{{ $delivery->invnumber }}" name="invnumber">
										</div>
									</div>

									<div class="form-group row">
										<label for="destination" class="col-md-4 col-form-label text-md-right">{{ __('Destination') }}</label>
										<div class="col-md-6">
											<input id="destination" type="string" class="form-control @error('destination') is-invalid @enderror" value= "{{ $delivery->location->address }}" name="destination">
										</div>
									
									</div>
									<div class="form-group row">
										<label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Quantity') }}</label>

										<div class="col-md-6">
											<input id="quantity" type="string" class="form-control @error('quantity') is-invalid @enderror" value= "{{ $delivery->quantity }}" name="quantity" required autocomplete="quantity" >

										</div>
									</div>
									
									<div class="form-group row">
										<label for="note" class="col-md-4 col-form-label text-md-right">{{ __('Note') }}</label>
										
										<div class="col-md-6">
											<input id="note" type="string" class="form-control @error('note') is-invalid @enderror" value= "{{ $delivery->note }}" name="note">
										</div>
									</div>

									<div class="form-group row">
										<label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
										<div class="col-md-6">
											<input id="status" type="string" class="form-control @error('status') is-invalid @enderror" value= "{{ $delivery->status }}" name="status">
										</div>
									</div>

									
								</form>
								
							
							</div>
					  </div> <!-- end content -->
				
@endsection
