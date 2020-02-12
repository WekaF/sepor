<?php

namespace App\Http\Controllers;
use App\Kategori;
use App\User;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function kate(){
        
        $subkat = Kategori::all();
      
        return response()->json($subkat,200);


    }
    public function index()
    {
        $data = Kategori::all();
      
        return view('/kategori.index')->with('Kategori', $data);
        
    }
    public function create(Request $request)
    {
        return view('kategori.create');

     
    }
    public function edit($id)
    {
         
        $data = Kategori::findOrFail($id);
        return view('kategori.edit', compact('data'));
        
    }
    public function store(Request $request)
    {
        // dd($request->all()) ;
        $input = $request->all();
    
        Kategori::create([  
            'nama_kategori' => $request->get('nama_kategori'),
           
        ]);
    alert()->success('Berhasil.','Data telah ditambahkan!');       
    return redirect()->route('kategori.index');
   
    }

    public function show($id)
    {

        $data = Kategori::findOrFail($id);

        return view('kategori.show', compact('data'));
    }
    public function update(Request $request, $id)
    {

          Kategori::find($id)->update([
            'nama_kategori' => $request->get('nama_kategori'),
           
        ]);
                

        // alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('kategori.index');
    }

    public function destroy($id)
    {
       
        $kategori = \App\Kategori::find($id);
        $kategori->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('kategori.index');
        
       }
}
