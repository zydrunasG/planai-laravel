<?php

namespace App\Http\Controllers;

use App\Company;
use App\Plan;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $plans = Company::with('plans', 'plans.specs', 'plans.fees')->get();

        $sms = $request->sms;
        $calls = $request->calls;
        $gb = $request->gb;
        $max_price = $request->from_price;
        $first = 0;

        if(count($plans)) {
            foreach ($plans as $plan) {
                if (count($plan['plans'])) {
                    for ($i = 0; $i < count($plan['plans']); $i++) {

                        $free_sms = $plan['plans'][$i]['specs']->free_sms;
                        $free_calls = $plan['plans'][$i]['specs']->free_calls;
                        $free_gb = $plan['plans'][$i]['specs']->free_gb;


                        $price = $plan['plans'][$i]->price;



                        $left_sms = ($sms - $free_sms) * ($sms - $free_sms);
                        $left_calls = ($calls - $free_calls) * ($calls - $free_calls);
                        $left_gb = ($gb - $free_gb) * ($gb - $free_gb);



                        $left_ratio = sqrt( $left_sms + $left_calls + $left_gb);




                        $plan['plans'][$i]['ration']= $left_ratio;


                        if($first == 0)
                        {
                            $bestPlan = $plan['plans'][$i]->id;
                            $value = $left_ratio;
                        }

                         if ($value > $left_ratio)
                         {
                             $bestPlan = $plan['plans'][$i]->id;
                             $value = $left_ratio;
                         }
                         $first=1;

                        // TODO geriausias planas rastas $bestPlan



                    }
                }
            }
        }  // end of if

        $plans = Company::with('plans', 'plans.specs', 'plans.fees')->whereHas('plans', function ($q) use ($bestPlan){
            $q->where('plans.id', $bestPlan);
        })->get();


        return view('plans.show', compact( 'plans', 'bestPlan'));

    }

    public function create()
    {
        return view('search.create');
    }



}
