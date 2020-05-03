<?php

namespace App\Http\Controllers;

use App\berita;
use App\User;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Response;


use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function berita(){
        $berita = berita::get();

        return Response::json($berita);
    }
    public function index()
    {
        $data = berita::get();
        return view('berita.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("images/berita", $fileName);
            $gambar = $fileName;
        } else {
            $gambar = NULL;
        }

             berita::create([  
            'judul'      => $request->get('judul'),
            'isi'        => $request->get('isi'),
            'gambar'     => $gambar
            
           
        ]);

    alert()->success('Berhasil.','Data telah ditambahkan!');       
    return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = berita::where('id',$id)->get();

        return Response::json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Berita $berita )
    {
        $data = berita::findOrFail($id);
        return view('berita.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = berita::findOrFail($id);

        berita::find($id)->update($request->all());
                
         alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('berita.index',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = berita::FindOrFail($id);
        $data->delete();

        return redirect()->route('berita.index');
    }
}
