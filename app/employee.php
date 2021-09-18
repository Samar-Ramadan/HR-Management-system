<?php

namespace App;
use App\section;
use App\jop;
use  App\work;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable =['name','gender','date_of_birth',

    'hire_date','education','degree','address','email'
    ,'phon_number','section_id','jop_id'


];

public function section(){
return $this->belongsTo (section::class);

}


public function jop(){
return $this->belongsTo (jop::class);

}

public function record(){
return $this->hasMany(attendance_record::class);
}

public function works(){
    return $this->hasMany(work::class);
    
        }
}
