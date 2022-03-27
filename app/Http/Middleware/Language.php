<?php

namespace App\Http\Middleware;

use App\Events\LangChanged;
use Closure;
use Illuminate\Http\Request;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('lang'))
        {
            app()->setLocale(session()->get('lang'));
            LangChanged::dispatch();
        }
        return $next($request);
    }
}
