<?php

namespace App;
use App\employee;

use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    protected $fillable=['task','employee_id'];


    public function employee(){
        return $this->belongsTo (employee::class);
        
        }
}
