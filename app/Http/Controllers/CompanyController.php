<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',

        ],[
            'name' => 'Blogai įvedėte operatoriaus pavadinimą'
        ]);


        $company = new Company;
        $company->name = $request->name;
        $company->save();

        return redirect('/create');
    }


}