<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\employee;

class attendance_record extends Model
{
 
 
    protected$fillable=['num_working_hours','num_working_extra_hours','num_absence_hours','employee_id','date_of_attendance'];

    public function employee(){
        return $this->belongsTo (employee::class);
        
        }



}
