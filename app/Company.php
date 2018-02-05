<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;
    public $fillable = ['name'];

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }




}
