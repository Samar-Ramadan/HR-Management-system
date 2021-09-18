<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\section;
use App\jop;
use App\attendance_record;
use  App\Http\Requests\employeerequest;
class employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$em=employee::all();
      
       return view('employee.index')->with('emp',employee::all());
        
    //return view('employee/create');

   // return view('employee.samar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create',['sections'=>section::all(),'jop'=>jop::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(employeerequest $request)
    {
        employee::create($request->all());
        return redirect('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   $emp=employee::find($id);
        return view('employee.show',['emp'=>$emp,'emp1'=>$emp]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $id1=employee::find($id);
        $sec=section::all();
        return view('updateemployee',['emp_edit'=>$id1,'sections'=>$sec,'jop'=>jop::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id1)
    {
      
        $id=employee::find($id1);

        $id->update(['name'=>$request->name,
        'gender'=>$request->gender,
        'date_of_birth'=>$request->date_of_birth,
       ' hire_date'=>$request->hire_date,
       ' education'=>$request->education,
       ' degree'=>$request->degree,
       ' address'=>$request->address,
       'email'=>$request->email,
        'phon_number'=>$request->phon_number,
        'jop_id'=>$request->jop_id,
        'section_id'=>$request->section_id,
      

    ]);
      
          return redirect('employee');

          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=emploee::find($id);
        $del->delete();
    }
}
