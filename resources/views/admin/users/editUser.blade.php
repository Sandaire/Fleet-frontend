@extends('layouts.admin')

				  @section('content')
					<!-- Content -->
					
<div class="card-header">Edit User</div> </br>

<div class="row">
		<div class="col-md-8" >
			<div class="main-card mb-3 card" style="margin-left:5px">
				<div class="card-body">
					<h5 class="card-title">Information User</h5></br>
					<form  method="POST" action="{{ route('admin.users.update', $user)}}">
							@csrf
						
						<div class="form-group row">
                            <label for="firstname" class="col-md-2 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $user->firstname }}" required autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="lastname" class="col-md-2 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->lastname }}" required autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
										
										<label for="company" class="col-md-2 col-form-label text-md-right">{{ __('Company') }}</label>
										<div class="col-md-6">
											
												<div class="form-select">
													<select name="company" id= "company">
													<option value=""></option>
													  @foreach($companies as $company)
														<option value="{{ $company->id }}" @if($user->company_id == $company->id){{ 'Selected' }} @endif>{{ $company->name }}</option>
													 @endforeach
													</select>
												</div>
											
										</div>
									</div> <hr>
						<div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						@csrf
						{{ method_field('PUT') }}
						<div class="form-group row">
							<label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
							<div class="col-md-6">
								@foreach($roles as $role)
									<div class="form-check-inline" >
										<input type="radio" name="roles[]" value="{{ $role->id }}"
										@if($user->roles->pluck('id')->contains($role->id)) checked @endif>								
										<label style="font-size:16px;margin-top:7px">&nbsp {{ $role->name }}</label>
									</div>
								@endforeach
							</div>
						</div><center>
						<button type="submit" class="btn" style="border-radius:20px; width:350px; background-color: #008a74; color:white; font-size:14px ">
							Update
						</button></center>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="main-card mb-3 card" style="background: linear-gradient(to bottom,  #008a74 25%, #ffffff 25%);">
				<div class="card-body">
					<h5 class="card-title" style="color:white">Profils User</h5>
					</br>
				</div></br>
				<center>
				<img style="width:100px; margin-top:-65px" src="{{ asset('images/user-image-with-black-background.png') }}">
				</center>

			</br>
			<center>
				<h5 style="color:Orange"> First Name </h5>
				<h6> email</h6>
				<hr>
				<h5 style="color:Green"> Manager </h5>
				</center>
			</div>
		</div>
	</div>
			
@endsection
