<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans =  Company::with('plans', 'plans.specs', 'plans.fees')->get();
        return view('plans.index', compact('plans'));
    }
}
