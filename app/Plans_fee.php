<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plans_fee extends Model
{
    public $timestamps = false;

    protected $fillable = ['plan_id', 'price_sms', 'price_calls', 'price_gb'];
}
