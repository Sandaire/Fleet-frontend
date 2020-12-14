@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">
						<a href="{{ route('admin.users.create') }}">
							<button type="button" class="btn btn-warning" style="color:#ffffff; font-size: 17px; font-family: arial"> 
							<i class="fa fa-plus" aria-hidden="true" title="Copy to use plus"> </i>
							New user 
							</button>
						</a>

							<div class="card-body">
							
							<table class = "table">
							  <thead>
								<tr>
								  <th scope="col">Name</th>
								  <th scope="col">Email</th>
								  <th scope="col">Roles</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>
								  @foreach($users as $user)
								  
									 <tr style="background-color:#F0F8FF; border-style: none none none groove; border-color:#B0C4DE">
									  <td><a href="{{ route('admin.users.show', $user->id)}}">{{ $user->name }}</a> </td>
									  <td>{{ $user->email }} </td>
									  <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }} </td>
									  <td></br>
									  @can('edit-users')
										<a href="{{ route('admin.users.edit', $user->id)}}">
											<button type="submit" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-warning" style ="float:left">
												<i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil-square-o">
													</i>
											</button>
										</a>
									  @endcan
									  
									  
									  @can('delete-users')
									  <form action ="{{ route('admin.users.destroy', $user)}}" method = "POST" class="" >
										@csrf
										{{ method_field('DELETE') }}
										<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger">
											<i class="fa fa-fw" aria-hidden="true" title="Copy to use trash">
												</i>
										</button>
									 </td>
									  </form>
									  @endcan
									 
									</tr>
								  @endforeach						
							  </tbody>
							</table>
						</div>
					  </div> <!-- end content -->
					  @endsection









