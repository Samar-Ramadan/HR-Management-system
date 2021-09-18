<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requestemp extends Model
{
    protected $fillable=['request_title','employee_id','date_request'];  
}
