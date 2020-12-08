@extends('layouts.admin')
@section('head')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="60" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FMS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
</head>
@endsection

				  @section('panel')
					<!-- Content -->
					  <div class="column content">
					  
						<a href="{{ route('loading.loadings.create') }}"><button type="button" class="btn btn-primary" float-right> + Loading order</button></a>
						<a href="('loading.loadings.addDelivery', $loading) " style="float:right"> Advanced search</a>

							<div class="card-body">
							
							<table class = "table">
							  <thead>
								<tr>
								  <th scope="col">ID</th>
								  <th scope="col">Vehicle</th>
								  <th scope="col">Terminal</th>
								  
								  <th scope="col">Start date</th>
								  <th scope="col"> Step</th>
								  <th scope="col">Status</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							 
							  <tbody>
								  @foreach($loadings as $loading)
									
									<tr>
									  <td><a href="{{ route('loading.loadings.show', $loading->id)}}">{{ $loading->id }}</a> </td>
									  <td>
											@foreach($vehicles as $vehicle)
												@if($vehicle->id == $loading->vehicle_id)
													{{ $vehicle->code }}
												@endif
											@endforeach
									  </td>
									  <td>{{ $loading->terminal }} </td>
									  

									  
									  <td>
											@if($loading->start_date == '')
												 {{ 'Not indicated' }}
											@else
												{{ $loading->start_date }}
											@endif
									   </td>
									  <td>
										
										@if($loading->step == '')
												 {{ '-' }}
											@else
												{{ $loading->step }}
											@endif
									  </td>
											
									  <td>{{ $loading->status }} </td>
									  <td>
									 
									  
									  @can('delete-users')
									  <form action ="{{ route('loading.loadings.destroy', $loading)}}" method = "POST" class="" >
										@csrf
										{{ method_field('DELETE') }}
										<button type="submit" class="btn btn-danger">Void</button> </td>
									  </form>
									  @endcan
									 
									</tr>
								  @endforeach						
							  </tbody>
							</table>
						</div>
					  </div> <!-- end content -->
					  @endsection