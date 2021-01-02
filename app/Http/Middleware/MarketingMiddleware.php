<?php

namespace App\Http\Middleware;

use App\Models\Employee;
use Closure;
use Illuminate\Http\Request;

class MarketingMiddleware
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
        $market =  Employee::where('department', '=', session('LoggedUser'));
        if ($market) {
            return abort(403, "No access here, sorry!");
        }else{
            return $next($request);
        }

    }
}
