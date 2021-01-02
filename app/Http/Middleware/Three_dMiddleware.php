<?php

namespace App\Http\Middleware;

use App\Models\Employee;
use Closure;
use Illuminate\Http\Request;

class Three_dMiddleware
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
        $three_d =  Employee::where('department', '=', session('LoggedUser'));

        if (!$three_d) {
            return abort(403, "No access here, sorry!");
        }
        return $next($request);
    }
}
