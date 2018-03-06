<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\Routing\Middleware as Middleware;
use Session;
use Config;
use App;

class Locale
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
        if(Session::has('locale')){
            $locale = Session::get('locale', Config::get('app.locale'));
            var_dump("Current locale");
            var_dump($locale);
        } else {
            $locale = Config::get('app.fallback_locale');;
        }
        
        App::setLocale($locale);

        return $next($request);
    }
}
