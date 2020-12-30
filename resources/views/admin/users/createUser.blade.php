@extends('layouts.admin')

@section('content')
<!-- Content -->
<div class="card-header">Register User</div>

<div class="row">
	<div class="col-md-8" >
		<div class="main-card mb-3 card" style="margin-left:5px">
			<div class="card-body">
				<h5 class="card-title">Information User</h5><hr>

					<form method="POST" action="{{ route('admin.users.store') }}">
									@csrf

									<div class="form-group row">
										<label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

										<div class="col-md-6">
											<input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus style="border-radius:20px">

											@error('firstname')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

										<div class="col-md-6">
											<input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus  style="border-radius:20px">

											@error('lastname')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
									<div class="form-group row">
										<label for="company" class="col-md-4 col-form-label text-md-right">Company</label>
										<div class="col-md-6">
												<div class="form-select">
													<select name="company" class="form-control" id= "company">
													<option value="">{{ 'Choose a transporter' }}</option>
													@foreach($companies as $company)
														<option name="" value="{{ $company->id }}">{{ $company->name }}</option>
													@endforeach
													</select>
												</div>
											
												<!-- <div class="form-group col-md-4">
													<label for="company" class="col-md-4 col-form-label text-md-right">Company</label>
													<select id="company" class="form-control"  name="company">
														<option value="">{{ 'Choose a transporter' }}</option>
														@foreach($companies as $company)
															<option name="" value="{{ $company->id }}">{{ $company->name }}</option>
														@endforeach
													</select>
												</div> -->

										</div>
									</div>
<hr>
									<div class="form-group row">
										<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

										<div class="col-md-6">
											<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  style="border-radius:20px">

											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

										<div class="col-md-6">
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  style="border-radius:20px">

											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

										<div class="col-md-6">
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  style="border-radius:20px">
										</div>
									</div>
									
									<div class="form-group row">
										<label for="roles" class="col-md-4 col-form-label text-md-right">Roles</label>
										<div class="col-md-6">
											@foreach($roles as $role)
												<div class="form-check">
													<input type="checkbox" name="roles[]" value="{{ $role->id }}">
													<label>{{ $role->name }}</label>
												</div>
											@endforeach
										</div>
									</div>
									
									<div class="form-group row mb-0">
										<div class="col-md-6 offset-md-4">
											<button type="submit" class="btn btn-success" style="border-radius:20px; width:200px;">
												{{ __('Register') }}
											</button>
											<button type="text" class="btn btn-default">
												{{ ('Cancel') }}
											</button>
										</div>
									</div>
					</form>

			</div>
		</div>
	</div>
		<!-- end content -->
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
			<h5 style="color:Green"> Role </h5>
			</center>
		</div>
	</div>
</div>
@endsection
