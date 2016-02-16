<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Itemtype;
use App\Biblio;
use Session;

class InitialSessionVariables
{
    /**
     * Handle an incoming request.
     * Determines if the user is the administrator of the website.
     * The administrator is the first user of the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        $itemtypes = Itemtype::all();

        Session::forget('itemtypes');

        Session::put('itemtypes', $itemtypes);

        $biblios = Biblio::all();

        Session::forget('biblios');

        Session::put('biblios', $biblios);

        return $next($request);

    }
}
