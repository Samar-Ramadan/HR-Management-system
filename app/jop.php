<?php

namespace App;
use App\section;
use App\employee;

use Illuminate\Database\Eloquent\Model;

class jop extends Model
{

    protected $fillable=['title_jop','education','num_active','num_extra'];
  /*  public function section(){
        return $this->belongsTo(section::class);
    }

    public function employees(){
        return $this->hasMany(employee::class);
    } */
}
