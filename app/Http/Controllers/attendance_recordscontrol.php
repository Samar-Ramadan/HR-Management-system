<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\attendance_record;
use Illuminate\Support\Facades\DB;


class attendance_recordscontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return view('record.index')->with('record',employee::find(1)->record);
        //return view('record.index')->with('record');
       // $dat = attendance_record::find(2)->employee;

       // $dat =DB::select('select *from attendance_records');
      // $dat=DB::table('attendance_records')->where('')
      $ff=$request->employee_id;
     // $dat=DB::table('attendance_records')->where(['employee_id'=>$ff])->get();
     
      // return view('record.index',['dat'=>$dat,'employee'=>employee::all()]);

      return view('record.index',['employee'=>$request->employee_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('record.create')->with('employee',employee::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        attendance_record::create($request->all());
        return redirect(route('record.create'))->with('employee',employee::all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
