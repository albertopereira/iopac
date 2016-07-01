<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Biblio;
use Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biblios = Biblio::All();

        $config_marcfields_search = Config::get('settings.marcfield_search');

        return view('home', compact('biblios'));
    }

   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function advancedSearch()
    {

        $biblios = Biblio::All();

        return view('advancedSearch', compact('biblios'));
    }
}
