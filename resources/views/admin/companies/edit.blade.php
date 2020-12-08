@extends('layouts.app')
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  padding: 10px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.menu {
  width: 25%;
}

.content {
  width: 75%;
}


}
</style>

@section('content')
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">Administration</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					
					<!-- Top Navigation Menu -->					

				<div class="clearfix">
				  <div class="column menu">
					<ul>
							  <li><a href="{{ route('home') }}">Dashboard </a></li>
							  <li><a href="#">Vehicles</a></li>
							   @can('manage-users')
							  <li><a href="#">Events</a></li>
							  <li><a href="#">Administration</a>
								<ul>
								  <li>
									<a class="" href="{{ route('admin.users.index') }}">
											Users
									</a>
								  </li>
								  <li>
									<a class="#" href="{{ route('admin.companies.index') }}">
											Companies
									</a>
								  </li>
								</ul>
							  </li>
							  <li><a href="#about"> Analytics</a></li>
							  @endcan
							  <li><a href="#about"> User guide</a></li>
							</ul>
				  </div> <!-- end menu -->
				  
					<!-- Content -->
					  <div class="column content">						
							<div class="card-body">
							
							<form action="{{ route('admin.companies.update', $company)}}" method="POST">
					
						<div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $company->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="contact_name" class="col-md-2 col-form-label text-md-right">contact_name</label>

                            <div class="col-md-6">
                                <input id="contact_name" type="text" class="form-control @error('contact_name') is-invalid @enderror" name="contact_name" value="{{ $company->contact_name }}" required autofocus>

                                @error('contact_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="address" class="col-md-2 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $company->address }}">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="phone" class="col-md-2 col-form-label text-md-right">phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $company->phone }}">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $company->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						@csrf
						{{ method_field('PUT') }}
						
						<button type="submit" class="btn btn-primary">
							Update
						</button>
					</form>
						</div>
					  </div> <!-- end content -->
				</div>
					
				</div>
												
        </div>
    </div>
@endsection
