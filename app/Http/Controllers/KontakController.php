<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kontak::all();
        return view('kontak.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kontak::create([

            'jenis' => $request->input('jenis'),
            'nama'  => $request->get('nama'),
            'nomor' => $request->get('nomor'),

        ]);
        alert()->success('Berhasil.','Data telah ditambahkan!');       
        return redirect()->route('kontak.index');
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
        $data = Kontak::findOrFail($id);
      
        if (empty($data)) {
            Flash::error('Barang not found');

            return redirect(route('kontak.index'));
        }

        return view('kontak.edit',compact('data'));
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
        $data = Kontak::findOrFail($id);

        Kontak::find($id)->update($request->all());
                
         alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('kontak.index',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontak = \App\Kontak::find($id);
        $kontak->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('kontak.index');
    }
}
