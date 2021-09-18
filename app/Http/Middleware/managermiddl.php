<?php

namespace App\Http\Middleware;

use Closure;
use App\manager;

class managermiddl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       /* $s=manager::all()->first()->password;
        
echo $s;
        if($s=='123')
        {
          session()->flash('error','not manager'); 
          return redirect(route('section.create')); 
        */ 
        return $next($request);
    }
}
