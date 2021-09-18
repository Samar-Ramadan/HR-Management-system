<?php

namespace App\Http\Controllers;
use App\section;
use Illuminate\Http\Request;
use App\employee;
use App\jop;
use App\attendance_record;
use App\bb;
use  App\Http\Requests\bbrequest;
use Illuminate\Support\Facades\DB;
class te extends Controller
{/*
    public function index(){
        return view('list_employees')->with('emp',employee::all());
    }
    public function show($id){

        return view('show_emp')->with('emp',employee::find($id));
    }
    public function fin($id){
        $fi=jop::find($id)->employees;
        return view('find')->with('fin',$fi);
    } */
    public function findemp($id){
        $fi1=section::find($id)->employees;
        $emp=employee::all();
        return view('work.create',['find'=>$fi1,'id'=>$id,'emp'=>$emp]);
    }
  /*  public function rate($id){
        $fi1=employee::find($id)->jop;
        return view('findse')->with('find',$fi1);
    }


    public function final(){
       return view('recemp')->with('employee',employee::all());
    
    } */

    public function final1(Request $request){
     
       $ff=$request->employee_id;
       $date1=$request->date1;
       $date2=$request->date2;
       //'employee_id','=',$ff
      $dd1=DB::table('attendance_records')->where([['employee_id','=',$ff],['date_of_attendance','>',$date1],['date_of_attendance','<',$date2]] )->get();
      $dd=DB::table('attendance_records')
      ->select(DB::raw('sum(num_working_hours) as sum_num_working_hours ,sum(num_absence_hours) as sum_num_absence_hours,sum(num_working_extra_hours) as num_working_extra_hours'))
      ->where([['employee_id','=',$ff],['date_of_attendance','>',$date1],['date_of_attendance','<',$date2]])
      ->groupBy('employee_id')
      ->get();
      
     
      
     return view('record.index',['employee'=>$dd,'employee1'=>$dd1]);

   
     }
    

public function find4( $id){
   // $login1=DB::table('sections')->select('id')->where(['id'=>$id])->get();
    
    
    
    $login3=employee::find($id)->section;
   
    
}


public function store1(Request $request){

    $ff=$request->employee_id;
        $date1=$request->date1;
        $date2=$request->date2;
        //'employee_id','=',$ff
       $dd1=DB::table('attendance_records')->where([['employee_id','=',$ff],['date_of_attendance','>',$date1],['date_of_attendance','<',$date2]] )->get();
       $dd=DB::table('attendance_records')
       ->select(DB::raw('sum(num_working_hours) as sum_num_working_hours ,sum(num_absence_hours) as sum_num_absence_hours'))
       ->where([['employee_id','=',$ff],['date_of_attendance','>',$date1],['date_of_attendance','<',$date2]])
       ->groupBy('employee_id')
       ->get();
       
      
       
       return view('balance.index',['employee'=>$dd,'employee1'=>$dd1]);
}




public function request_rate($id){
    return view('test1')->with('emp',employee::find($id));



}
public function requests($id){

    return view('requests.create')->with('emp',employee::find($id));
}



public function bonusescreate(){
    return view('bonusesemp')->with('emp',employee::all());
}

public function bonusesstore(bbrequest $request){

    bb::create($request->all());
    return redirect('managerstart');
}












}
