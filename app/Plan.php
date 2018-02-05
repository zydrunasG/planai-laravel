<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    public function specs()
    {
        return $this->hasOne(Plans_spec::class);
    }

    public function fees()
    {
        return $this->hasOne(Plans_fee::class);
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }

}
