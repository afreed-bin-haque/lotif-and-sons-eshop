<?php

namespace App\Http\Middleware\Backend;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Session;
use Carbon\Carbon;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = Session::get('path');
        $access_token = Session::get('access_token');
        if(!empty($path)&&!empty($access_token)){
            return $next($request);
        }else{
            Session::flush();
            return redirect()->route('log.in');
        }
        return $next($request);
    }
}
