<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\servierequest;
use App\servie;
use App\extra;
class serviescontrol extends Controller
{
    public function create(){
        return view('servies.create');
    }

    public function store(servierequest $request){
       // servie::create($request->all());
    dd($request->image->store('images','public'));
    
    }

  


}
