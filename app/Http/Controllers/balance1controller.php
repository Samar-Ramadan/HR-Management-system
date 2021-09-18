<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\jop;
use App\balance;
use App\attendance_records;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\blancerequest;
class balance1controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('balance.show')->with('rate',balance::all());
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('balance.create')->with('emp',employee::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
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
       
       $find_emp=employee::find($ff);
       $find_jop=jop::find($find_emp->id);
      
       
       return view('balance.index',['employee'=>$dd,'employee1'=>$dd1,'find_emp'=>$find_emp,'find_jop'=>$find_jop]);
    }
    public function store1(blancerequest $request){
        $addtotable=new balance();
       
       
        $active=$request->num_active*$request->sum_num_working_hours;
        $extra=$request->num_extra*$request->num_working_extra_hours;
        $addtotable->rate=$active+ $extra;
        $addtotable->employee_id=$request->employee_id;
        $addtotable->date_rate=$request->date_rate;
       
        $addtotable->save(); 


    }

 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rate=balance::find($id);
        return view('balance.show')->with('rate',$rate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
