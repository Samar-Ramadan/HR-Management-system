<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\sectionrequest;
use App\section;
use App\jop;

class sectionconteoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('section.index')->with('sections',section::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('section\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(sectionrequest $request)
    {
       
        section::create($request->all());
        //$ss=$request->sectionName;
      // $re=$request->section_title;
      //  if($re==='samar'){
        //    return redirect('section\create');
        //} */
        
        return redirect('section');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //return view('section.index',['sections'=>section::all(),'jops'=>section::find(1)->jops]);
     // $jops=section::find($id)->jops;
      
    // return view('section.show',['section'=>section::find($id),'jops'=>$jops,'employee'=>jop::find( $id )->employees]);
    $section=section::find($id)->employees;
    return view('section.show')->with('sections',$section);
    
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $sec=section::find($id);
        return view('updatesection',['sections'=>$sec]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(sectionrequest $request, $id)
    {
        $id1=section::find($id);
        $id1->update([
        'section_title'=>$request->section_title,
        'manager'=>$request->manager


        ]);
        return redirect('section');
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

   /* public function find($id)
    {

        $fi=section::find($id)->employee;
        return view('find')->with('find',$fi);
    } */
}
