<?php

namespace App\Http\Controllers;
use App\Kategori;
use App\User;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Response;

use Illuminate\Http\Request;

class KategoriController extends Controller
{

    
    public function kate(){
        
        $kate = Kategori::get();

        $response['status'] = 'OK';
        $response['result'] = $kate;
      
        return Response::json($response);


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

        $kate = Kategori::find($id);

        if ($kate) {
         $response['status'] = 'OK';
         $response['result'] = $kate;
        } else {
         $response['status'] = 'ERROR';
         $response['message'] = 'User not found';
        }
      
        return Response::json($response);
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
