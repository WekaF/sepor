<?php

namespace App\Http\Controllers;

use App\DetailKA;
use App\JenisKA;
use App\Jalur;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Facades\Storage;
use File;
use DB;

use Illuminate\Http\Request;

class KeretainfoController extends Controller
{
   
    public function infokereta(){

        $detail = DetailKA::get();

        $response['status'] = 'OK';
        $response['result'] = $detail;

        return Response::json($response);
    
    }
    public function index()
    {
        $data = DetailKA::all();
        $jenis = DB::table('jeniskeretas')->get()->pluck('jensi_kereta');
        $jalur = DB::table('jalurs')->get()->pluck('nama_jalur');        

        //  dd($jalur->all());
        
        return view('keretainfo.index',compact('data'))->with('jenis',$jenis)->with('jalur',$jalur);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $jenis = JenisKA::get();
         $jalur = Jalur::get();
        return view('keretainfo.create',compact('jenis'))->with('jalur',$jalur);
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

        if($request->file('gambar1')) {
            $file = $request->file('gambar1');
            $name  = $file->getClientOriginalName();
            $path = Storage::putfile('public/images/keretainfo', $file);
            $request->file('gambar1')->move('images/keretainfo', $name);
            $gambar1 = $name;
    } else {
        $gambar = NULL;
    }


        DetailKA::create([  
            'nama_kereta'        => $request->get('nama_kereta'),
            'no_ka'              => $request->get('no_ka'),
            'jam'                => $request->get('jam'),
            'kelaska'            => $request->get('kelaska'),
            'relasi'             => $request->get('relasi'),
            'jalur_id'           => $request->input('jalur_id'),
            'jenis_id'           => $request->input('jenis_id'),
            'keterangan'         => $request->get('keterangan'),
            'progres_stasiun'    => $gambar1,
           
           
        ]);
    alert()->success('Berhasil.','Data telah ditambahkan!');        
    return redirect()->route('keretainfo.index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DetailKA::findOrFail($id);
        return view('keretainfo.show', compact('data'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DetailKA::findOrFail($id);
      
        $jenis = JenisKA::get();
        $jalur = Jalur::get();
        
        if (empty($data)) {
            Flash::error('Barang not found');

            return redirect(route('keretainfo.index'));
        }

        return view('keretainfo.edit',compact('data'))->with('jenis',$jenis)->with('jalur',$jalur);
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
        // dd($request->all());

        $data = DetailKA::findOrFail($id);

        if($request->file('gambar1')) {
            $file = $request->file('gambar1');
            $name  = $file->getClientOriginalName();
            $path = Storage::putfile('public/images/keretainfo', $file);
            $request->file('gambar1')->move('images/keretainfo', $name);
            $gambar1 = $name;
    } else {
        $gambar = NULL;
    }
   
    
        DetailKA::find($id)->update([  
            'nama_kereta'        => $request->get('nama_kereta'),
            'no_ka'              => $request->get('no_ka'),
            'jam'                => $request->get('jam'),
            'kelaska'            => $request->get('kelaska'),
            'relasi'             => $request->get('relasi'),
            'jalur_id'           => $request->input('jalur_id'),
            'jenis_id'           => $request->input('jenis_id'),
            'keterangan'         => $request->get('keterangan'),
            'progres_stasiun'    => $gambar1,
           
        ]);


                
         alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('keretainfo.index',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = \App\DetailKA::find($id);
        $detail->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('keretainfo.index');
    }

    public function keretashow($id)
    {
        $kereta = DetailKA::with('jenis')->where('jenis_id',$id)->get();
      
        $response['status'] = 'OK';
        $response['result'] = $kereta;

        return Response::json($response);
   }
    public function detail($id){
     
        $detail = DetailKA::where('id',$id)->get();

        $response['status'] = 'OK';
        $response['result'] = $detail;

        return Response::json($response);
     
    }
}
