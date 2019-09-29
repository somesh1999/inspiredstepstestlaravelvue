<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckProfileStatus
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
        $userid=Auth::user()->id;
        $getdata = \App\Profile::find($userid);
        if($getdata->fill_status === 0){
            return redirect('home');
        }           
        return $next($request);
    }
}
