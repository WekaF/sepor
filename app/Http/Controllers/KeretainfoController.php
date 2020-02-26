<?php

namespace App\Http\Controllers;

use App\DetailKA;
use App\JenisKA;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

use Illuminate\Http\Request;

class KeretainfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DetailKA::all();
        $jenis = JenisKA::pluck('jenis_kereta','id');
        return view('keretainfo.index',compact('data'))->with('jenis',$jenis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = JenisKA::pluck('jenis_kereta','id');

        return view('keretainfo.create')
        ->with('jenis',$jenis);
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
            'jam'                => $request->get('jam'),
            'jalur'              => $request->get('jalur'),
            'progres_stasiun'    => $request->get('progres_stasiun'),
            'jenis_id'           => $request->input('jenis_id'),
           
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
        //
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
       
        if (empty($data)) {
            Flash::error('Barang not found');

            return redirect(route('keretainfo.index'));
        }

        return view('keretainfo.edit',compact('data'))->with('jenis',$jenis);
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
}
