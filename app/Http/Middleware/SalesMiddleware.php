<?php

namespace App\Http\Middleware;

use App\Models\Employee;
use Closure;
use Illuminate\Http\Request;

class SalesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       $sales =  Employee::where('department', '=', session('LoggedUser'));
        if ($sales) {
            return abort(403, "No access here, sorry!");
        }
        return $next($request);
    }
}
