<?php

namespace App\Http\Controllers;

use App\StasiunInfo;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class StasiunInfoController extends Controller
{
    public function infostat(){

        $data = StasiunInfo::all()->take(1);

        $response['status'] = 'OK';
        $response['result'] = $data;

        return Response::json($response);
    
    }
    public function index()
    {
        $data = StasiunInfo::all();
        return view('stasiuninfo.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stasiuninfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $name  = $file->getClientOriginalName();
            $path = Storage::putfile('public/images/denah', $file);
            $request->file('gambar')->move('images/denah', $name);
            $gambar = $name;
    } else {
        $gambar = NULL;
    }

        
        StasiunInfo::create([

            'nama_denah' => $request->get('nama_denah'),
            'gambar' => $gambar,
            'deskripsi' => $request->get('deskripsi'),
        ]);

        alert()->success('Berhasil.','Data telah ditambahkan!');     
        return redirect()->route('stasiuninfo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $data = Stasiuninfo::findOrFail($id);
        
        $stas = StasiunInfo::find($id);

        $response['status'] = 'OK';
        $response['result'] = $stas;

       
        return view('stasiuninfo.show', compact('data'));
        return Response::json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Stasiuninfo::findOrFail($id);

        return view('stasiuninfo.edit',compact('data'));
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
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $name  = $file->getClientOriginalName();
            $path = Storage::putfile('public/images/denah', $file);
            $request->file('gambar')->move('images/denah', $name);
            $gambar = $name;
    } else {
        $gambar = NULL;
    }
    
        Stasiuninfo::find($id)->update([
            'nama_denah' => $request->get('nama_denah'),
            'gambar'     => $gambar,
            'deskripsi' => $request->get('deskripsi'),
            
           
        ]);

        alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('stasiuninfo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = StasiunInfo::FindOrFail($id);
        $data->delete();
        
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('stasiuninfo.index');
    }
}
