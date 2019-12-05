<?php

namespace App\Http\Middleware;

use Closure;

class centroadmin
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
        /*
         * identifica el usuario por medio del rol id
         */
        if ($request->user()->id_tipo == 3 || $request->user()->id_tipo == 2){
            return $next($request);
        }else{
            return redirect('home');
        }
    }
}
