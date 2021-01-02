<?php

namespace App\Http\Middleware;

use App\Models\Employee;
use Closure;
use Illuminate\Http\Request;

class EngineeringMiddleware
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
        $engineer =  Employee::where('department', '=', session('LoggedUser'));
        if ($engineer) {
            return abort(403, "No access here, sorry!");
        }
        return $next($request);
    }
}
