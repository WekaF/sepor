<?php

namespace App\Http\Controllers;
use App\SubKategori;
use App\Trayek;
use App\Taxi;
use App\DetailKA;
use DataTables;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $subkategori = SubKategori::get();
       $trayek = Trayek::get();
       $taxi   = Taxi::get();
       $detail  = DetailKA::get();
      
        return view('home',compact('subkategori','trayek','taxi','detail'));
      
    }
    
   
}
