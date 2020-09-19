<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        $user = array();
        $userdata = auth()->user();
        
        if($userdata != ''){
            $user = $userdata->toArray();
        }else{
            $user = $userdata;
        }
        if(empty($user)){
        // if(count($user) != 0){
            return redirect('/admin');
        }else{
            if(auth()->user()->is_admin == 1 || auth()->user()->is_admin == 2) {
                return $next($request);
            }
            return redirect('/admin');
        } 
        
    }
}
