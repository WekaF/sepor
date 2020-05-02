<?php

namespace App\Http\Controllers;

use App\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index()
    {
        $berita = berita::paginate(10);
        return view('home',compact('berita'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function show($id)
    {

            $berita = berita::where('id',$id)->first();
            return view('showberita',compact('berita'));
        
        
    }

    public function search(Request $request)
    {
        $berita = DB::table('beritas')
        ->where('judul', 'LIKE', '%'.$request->search.'%');

        $berita = $berita->paginate(10);
        return view('home',compact('berita'));
    }
}
