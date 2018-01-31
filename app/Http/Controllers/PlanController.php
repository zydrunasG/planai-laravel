<?php

namespace App\Http\Controllers;

use App\Company;
use App\Plan;
use App\Plans_fee;
use App\Plans_spec;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans =  Company::with('plans', 'plans.specs', 'plans.fees')->get();
        return view('plans.index', compact('plans'));
    }


    public function create()
    {
        $companies = Company::all();
        return view('plans.create',  compact('companies'));

    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'company' => 'required',
            'plan_name' => 'required',
            'price' => 'required|numeric|min:0',
            'free_sms' => 'required|numeric|min:0',
            'free_calls' => 'required|numeric|min:0',
            'free_gb' => 'required|numeric|min:0',
            'price_sms' => 'required|numeric|min:0',
            'price_calls' => 'required|numeric|min:0',
            'price_gb' => 'required|numeric|min:0'


        ]);



        $plan = new Plan;
        $plan->company_id = $request->company;
        $plan->plan_name = $request->plan_name;
        $plan->price = $request->price;
        $plan->save();
        $plan_id = $plan->id;


        $specs = new Plans_spec();


        $specs->plan_id = $plan_id;
        $specs->free_sms = $request->free_sms;
        $specs->free_calls = $request->free_calls;
        $specs->free_gb = $request->free_gb;
        $specs->save();


        $fee = new Plans_fee;
        $fee->plan_id = $plan_id;
        $fee->price_sms = $request->price_sms;
        $fee->price_calls = $request->price_calls;
        $fee->price_gb = $request->price_gb;
        $fee->save();


        return redirect()->home();

    }
}
