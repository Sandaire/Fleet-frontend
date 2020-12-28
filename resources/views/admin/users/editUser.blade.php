@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
	<div class="col">
      <div class="card mb-3 widget-content bg-midnight">
          <div class="widget-content-wrapper text-black">
          <div class="widget-content-outer">
					  <div class="column content" style="margin-left:200px">						
							<div class="card-body">
							
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
									</div> 
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
						</div>
						<button type="submit" class="btn btn-success" style="border-radius:20px; width:550px; ">
							Update
						</button>
					</form>
						</div>
					  </div> <!-- end content -->
					  
			</div></div></div>
@endsection
