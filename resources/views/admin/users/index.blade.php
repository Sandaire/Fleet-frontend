@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->
					  <div class="column content">
						<a href="{{ route('admin.users.create') }}"><button type="button" class="btn btn-primary" float-right> + New user</button></a>

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
									
									<tr>
									  <td><a href="{{ route('admin.users.show', $user->id)}}">{{ $user->name }}</a> </td>
									  <td>{{ $user->email }} </td>
									  <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }} </td>
									  <td>
									  @can('edit-users')
										<a href="{{ route('admin.users.edit', $user->id)}}"><button class="btn btn-primary" style ="float:left">Edit</button></a>
									  @endcan
									  
									  
									  @can('delete-users')
									  <form action ="{{ route('admin.users.destroy', $user)}}" method = "POST" class="" >
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









