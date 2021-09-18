<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\employee;

class achieve extends Model
{
    protected $fillable =['achieve_title','employee_id'


];

public function employee(){
    return $this->belongsTo (employee::class);
    
    }
    

}
