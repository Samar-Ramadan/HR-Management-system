<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manager extends Model
{
    protected $fillable=['name','name_company','education','email','password'];
}
