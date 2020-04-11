<?php

namespace App\Http\Controllers;

use App\DetailKA;
use App\JenisKA;
use App\Jalur;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Response;

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
        $jenis = JenisKA::pluck('jenis_kereta','id');
        $jalur = Jalur::where('jalur');
        
        return view('keretainfo.index',compact('data','jalur'))->with('jenis',$jenis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = JenisKA::pluck('jenis_kereta','id');
        $jalur = Jalur::pluck('jalur','id');
        return view('keretainfo.create')
        ->with('jenis',$jenis)->with('jalur',$jalur);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DetailKA::create([  
            'nama_kereta'        => $request->get('nama_kereta'),
            'no_ka'              => $request->get('no_ka'),
            'jam'                => $request->get('jam'),
            'jalur_id'           => $request->get('jalur_id'),
            'kelaska'            => $request->get('kelaska'),
            'relasi'             => $request->get('relasi'),
            'progres_stasiun'    => $request->get('progres_stasiun'),
            'jenis_id'           => $request->input('jenis_id'),
            'keterangan'         => $request->get('keterangan'),
           
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
        $jalur = Jalur::get();
        
        return view('keretainfo.show', compact('data','jalur'));
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
      
        $jenis = JenisKA::pluck('jenis_kereta','id');
        $jalur = Jalur::pluck('jalur','id');
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
        $data = DetailKA::findOrFail($id);

        DetailKA::find($id)->update($request->all());
                
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
        $detail = DetailKA::find($id);

        if ($detail) {
         $response['status'] = 'OK';
         $response['result'] = $detail;
        } else {
         $response['status'] = 'ERROR';
         $response['message'] = 'User not found';
        }
      
        return Response::json($response);
    }
}
