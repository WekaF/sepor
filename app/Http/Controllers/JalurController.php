<?php

namespace App\Http\Controllers;

use App\Jalur;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Facades\Storage;
use File;

use Illuminate\Http\Request;


class JalurController extends Controller
{
    
    public function jalur(){
        $jalur = Jalur::all();

        $response['status'] = 'OK';
        $response['result'] = $jalur;
        return Response::json($response); 
    }
    public function index()
    {
        $data = Jalur::all();
        return view('jalur.index',compact('data'));
    }

    public function create()
    {
        return view('jalur.create');
    }

   
    public function store(Request $request)
    {
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $name  = $file->getClientOriginalName();
            $path = Storage::putfile('public/images/jalur', $file);
            $request->file('gambar')->move('images/jalur', $name);
            $gambar = $name;
    } else {
        $gambar = NULL;
    }

        
        Jalur::create([

            'nama_jalur' => $request->get('nama_jalur'),
            'gambar' => $gambar,
            'deskripsi' => $request->get('deskripsi'),
        ]);

        alert()->success('Berhasil.','Data telah ditambahkan!');     
        return redirect()->route('jalur.index');
    }

   
    public function show($id)
    {
        $data = Jalur::findorfail($id);
        return view('jalur.show', compact('data'));
       
    }

   
    public function edit($id)
    {
        $data = Jalur::findOrFail($id);

        return view('jalur.edit',compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $name  = $file->getClientOriginalName();
            $path = Storage::putfile('public/images/denah', $file);
            $request->file('gambar')->move('images/denah', $name);
            $gambar = $name;
    } else {
        $gambar = NULL;
    }
    
        Jalur::find($id)->update([
            'nama_jalur' => $request->get('nama_jalur'),
            'gambar'     => $gambar,
            'deskripsi' => $request->get('deskripsi'),
            
           
        ]);

        alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('jalur.index');
    }

   
    public function destroy($id)
    {
        $data = Jalur::FindOrFail($id);
        $data->delete();
        
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('stasiuninfo.index');
    }
    public function jalurget($id){
        $jalur = Jalur::where('id',$id)->get();

        $response['status'] = 'OK';
        $response['result'] = $jalur;

        return Response::json($response);
    }
}
