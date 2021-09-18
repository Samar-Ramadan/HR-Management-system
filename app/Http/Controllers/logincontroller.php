<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\section;
use Illuminate\Support\Facades\DB;

class logincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $login=DB::table('employees')->where(['name'=>$request->name])->get();
     // $login1=DB::table('sections')->where(['manager'=>$request->name])->get();
     $login1=DB::table('sections')->select('id')->where(['manager'=>$request->name])->get();
     //$login1=employee::find($login->section_id);
      
     // $login3=section::find(   '$login2')->employees;
    if ($login&&$login1) {
       
        return view('wellcompage',['login'=>$login,'login1'=>$login1]);
    } else {
        
        return view('wellcompage',['login'=>$login]);
    }
    
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $login1=DB::table('sections')->where(['id','=',$id])->get();
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