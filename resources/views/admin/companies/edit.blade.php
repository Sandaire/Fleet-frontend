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
                <div class="card-header">Edit Companies
                <button class="btn-group btn btn-outline-warning" style="height:40px; color:green; font-size: 20px; font-family: arial; border-radius:100%; margin-left:1010px">
                <i class="fa fa-times" aria-hidden="true" style="margin-top:3px"></i>
                    <!-- {{ ('Cancel') }} -->
                </button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					
					<!-- Top Navigation Menu -->					

				<div class="clearfix"> 
					<!-- Content -->
					  <div class="column content" style=" margin-left:180px">						
							<div class="card-body">
							
							<form action="{{ route('admin.companies.update', $company)}}" method="POST">
					
						<div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $company->name }}" required autofocus style="border-radius:20px">

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
                                <input id="contact_name" type="text" class="form-control @error('contact_name') is-invalid @enderror" name="contact_name" value="{{ $company->contact_name }}" required autofocus style="border-radius:20px">

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
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $company->address }}" style="border-radius:20px">

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
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $company->phone }}" style="border-radius:20px">

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $company->email }}" required autocomplete="email" autofocus style="border-radius:20px">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div></br>
						
						@csrf
						{{ method_field('PUT') }}
						<center style="margin-left:40px">
						<button type="submit" class="btn btn-success" style="border-radius:20px; width:200px;">
							Update
						</button></center>
					</form>
						</div>
					  </div> <!-- end content -->
				</div>
				</div>
												
        </div>
    </div>
@endsection
