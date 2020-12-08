@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">
						<a href="{{ route('admin.companies.create') }}"><button type="button" class="btn btn-primary" float-right> + New company</button></a>

							<div class="card-body">
							
							<table class = "table">
							  <thead>
								<tr>
								  <th scope="col">Name</th>
								  <th scope="col">Email</th>
								  <th scope="col">Contact</th>
								  <th scope="col">Address</th>
								  <th scope="col">Phone</th>
								</tr>
							  </thead>
							  <tbody>
								  @foreach($companies as $company)
									
									<tr>
									  <td>{{ $company->name }} </td>
									  <td>{{ $company->email }} </td>
									  <td>{{ $company->contact_name }} </td>
									  <td>{{ $company->address }} </td>
									  <td>{{ $company->phone }} </td>
									  <td>
									  @can('edit-users')
										<a href="{{ route('admin.companies.edit', $company->id)}}"><button class="btn btn-primary" style ="float:left">Edit</button></a>
									  @endcan
									  
									  
									  @can('delete-users')
									  <form action ="{{ route('admin.companies.destroy', $company)}}" method = "POST" class="" >
										@csrf
										{{ method_field('DELETE') }}
										<button type="submit" class="btn btn-danger">Delete</button> </td>
									  </form>
									  @endcan
									 
									</tr>
								  @endforeach						
							  </tbody>
							</table>
						</div>
					  </div> <!-- end content -->
				
@endsection











