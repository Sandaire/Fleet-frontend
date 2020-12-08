@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					
					  <div class="column content">	
							<a href="{{ route('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-primary" float-right> Edit user</button></a>					  
							<div class="card-body">
							
							<form action="{{ route('admin.users.update', $user)}}" method="POST">
						
						
						<div class="form-group row">
                            <label for="firstname" class="col-md-2 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" disabled class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $user->firstname }}" required autofocus>

                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="lastname"  class="col-md-2 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" disabled class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->lastname }}" required autofocus>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="company"  class="col-md-2 col-form-label text-md-right">{{ __('Fleet company') }}</label>

                            <div class="col-md-6">
                                <input id="company" type="text" disabled class="form-control @error('company') is-invalid @enderror" name="company" 
								value="{{ $user->company->name }}" required autofocus>
                            </div>
                        </div>
				
						<div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" disabled class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>                               
                            </div>
                        </div>
						
						
						@csrf
						{{ method_field('PUT') }}
						<div class="form-group row">
							<label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
							<div class="col-md-6">
								@foreach($roles as $role)
									<div class="form-check">
																	
										<label>@if($user->roles->pluck('id')->contains($role->id)) {{ $role->name }} @endif</label>
									</div>
								@endforeach
							</div>
						</div>
						
					</form>
						</div>
				
@endsection
