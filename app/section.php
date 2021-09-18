<?php

namespace App;
use App\employee;
use App\jop;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    protected $fillable=['section_title','manager'];

    public function employees(){
return $this->hasMany(employee::class);

    }
/*
    public function jops(){
        return $this->hasMany(jop::class);
        
            } */
}
