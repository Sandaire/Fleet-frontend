<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Company;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
   
   public function __construct()
    {
        $this->middleware('auth');
    }
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
		$companies = Company::all();
		$users = User::all();
		return view('admin.users.index')->with('users', $users, 'companies', $companies );
    } 
	
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$roles = Role::all();
		$companies = Company::all();
		
		return view('admin.users.createUser')->with([
			'roles' => $roles, 'companies' => $companies
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   		
		$company = $request->company;
		$user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'name' => $request->firstname." ".$request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
						
		// Add roles
		if(is_null($request->roles)){  
			$role = Role::select('id')->where('name','user')->first();
			$user->roles()->attach($role);
		}else{
			$user->roles()->sync($request->roles);
		}
		
		// Associate to company
		if(!empty ($request->input('company'))){
			$user->company()->associate($company);	
		}
		$user->save();
		
		if($user->save()){
			$request->session()->flash('success', $user->name.' has been created');	
		}else{
			$request->session()->flash('error', 'There was an error creating the user');
		}
						
		return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if(Gate::denies('edit-users')){
			return redirect(route('admin.users.index'));
		}
		
		$roles = Role::all();
		$companies = Company::all();
		
		return view('admin.users.showUser')->with([
			'user' => $user,
			'roles' => $roles,
			'companies' => $companies
			
		]);
    }
	
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users')){
			return redirect(route('admin.users.index'));
		}
		
		$roles = Role::all();
		$companies = Company::all();
		
		return view('admin.users.editUser')->with([
			'user' => $user,
			'roles' => $roles,
			'companies' => $companies
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
		$company = $request->company;
		
		$user->firstname = $request->firstname;
		$user->lastname = $request->lastname;
		$user->name = $request->firstname." ".$request->lastname;
		$user->email = $request->email;
				
		if(!empty ($request->input('password'))){
			$user->password = Hash::make($request->input('password'));		
		}
		
		// Associate to company
		if(!empty ($request->input('company'))){
			$user->company()->associate($company);	
		}
		
		$user->save();
		
		if($user->save()){
			$request->session()->flash('success', $user->name.' has been update');	
		}else{
			$request->session()->flash('error', 'There was an error updating the user');
		}
						
		return redirect()->route('admin.users.index');
		
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
			return redirect(route('admin.users.index'));
		}
		
		$user->roles()->detach();
        $user->delete();
		
		/* if($user->delete()){
			$request->session()->flash('success', $user->name.' has been deleted');	
		}else{
			$request->session()->flash('error', 'There was an error deleting the user');
		} */
		
		return redirect()->route('admin.users.index');
    }
}
