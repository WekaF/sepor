<?php

namespace App\Http\Controllers;
use App\SubKategori;
use App\Trayek;
use App\Taxi;
use App\DetailKA;
use App\Kontak;
use App\berita;
use App\Feedbacks;
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
       $kontak = Kontak::get();
       $berita = berita::get();
       $feedback = Feedbacks::paginate(5);
      


        return view('dashboard',compact('subkategori','trayek','taxi','detail','kontak','berita','feedback'))->with('i', (request()->input('page', 1) - 1) * 10);
      
    }
    
   
}
