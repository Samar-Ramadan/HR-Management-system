<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jop;
use  App\Http\Requests\joprequest;

class jopcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jop.index')->with('jop',jop::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(joprequest $request)
    {
        jop::create($request->all());
        return redirect('jop');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $id1=jop::find($id);
       
        return view('updatejop',['jop'=>$id1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(joprequest $request, $id)
    {
        $id1=jop::find($id);
        $id1->update([
        'title_jop'=>$request->title_jop,
        'education'=>$request->education,
        'num_active'=>$request->num_active,
        'num_extra'=>$request->num_extra


        ]);
        return redirect('jop');
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
