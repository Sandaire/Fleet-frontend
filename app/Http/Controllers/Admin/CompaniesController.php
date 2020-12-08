<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
		return view('admin.companies.index')->with('companies', $companies); 
		
		//return 'Companies';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        $company = Company::create([
            'name' => $data['name'],
            'contact_name' => $data['contact_name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);
		
		return $company;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* if (! Gate::allows('users_manage')) {
            return abort(401);
        } */
		
        $company = Company::create($request->all());
        
        return redirect()->route('admin.companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        if(Gate::denies('edit-users')){
			return redirect(route('admin.companies.index'));
		}
		
		return view('admin.companies.edit')->with(['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {		
		$company->name = $request->name;
		$company->contact_name = $request->contact_name;
		$company->address = $request->address;
		$company->phone = $request->phone;
		$company->email = $request->email;

		if($company->save()){
			$request->session()->flash('success', $company->name.' has been update');	
		}else{
			$request->session()->flash('error', 'There was an error updating the company');
		}
						
		return redirect()->route('admin.companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
