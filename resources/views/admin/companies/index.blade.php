@extends('layouts.admin')

				  @section('content')
					<!-- Content -->
					
					  <div class="column content">
						<div class="card-header">
							<a href="{{ route('admin.companies.create') }}">
								<button class="btn btn-warning" style="color:#ffffff; font-size: 17px; font-family: arial"> 
									<i class="fa fa-plus" aria-hidden="true" title="Copy to use plus"> </i> New company
								</button>
							</div>
						</a>

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
									
									<tr style="border-style: none none none groove; border-color:#B0C4DE; background-color:#F0F8FF; border-radius: 100px">
									  <td>{{ $company->name }} </td>
									  <td>{{ $company->email }} </td>
									  <td>{{ $company->contact_name }} </td>
									  <td>{{ $company->address }} </td>
									  <td>{{ $company->phone }} </td>
									  <td>
									  @can('edit-users')
										<a href="{{ route('admin.companies.edit', $company->id)}}">
											<button type="submit" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-warning" style ="float:left">
												<i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil-square-o">
													</i>
											</button>
										</a>
									  @endcan
									  
									  
									  @can('delete-users')
									  <form action ="{{ route('admin.companies.destroy', $company)}}" method = "POST" class="" >
										@csrf
										{{ method_field('DELETE') }}
										<button type="submit" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger" style ="float:left">
												<i class="fa fa-trash" aria-hidden="true" title="Copy to use trash">
													</i>
											</button> </td>
									  </form>
									  @endcan
									 
									</tr>
								  @endforeach						
							  </tbody>
							</table>
						</div>
					  </div> <!-- end content -->
				
@endsection











