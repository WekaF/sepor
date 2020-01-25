<?php

namespace App\Http\Controllers;
use App\Angkot;
use App\User;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AngkotController extends Controller
{
    public function index()
    {
        $data_angkot = \App\Angkot::all();
      
        return view('/angkot.Angkot')->with('Angkot', $data_angkot);
        
    }
    public function create(Request $request)
    {
        return view('angkot.create');

     
    }
    public function edit($id)
    {
         
        $data = Angkot::findOrFail($id);
        return view('angkot.edit', compact('data'));
    }
    public function store(Request $request)
    {
        // dd($request->all()) ;

        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("images/denah_angkot", $fileName);
            $gambar = $fileName;
        } else {
            $gambar = NULL;
        }

        Angkot::create([
            'kode_angkot' => $request->get('kode_angkot'),
            'Keterangan'  => $request->get('Keterangan'),
            'rute'        => $request->get('rute'),
            'gambar'      => $gambar
            
        ]);
    alert()->success('Berhasil.','Data telah ditambahkan!');       
    return redirect()->route('angkot.index');
   
    }

    public function show($id)
    {

        $data = Angkot::findOrFail($id);

        return view('angkot.show', compact('data'));
    }
    public function update(Request $request, $id)
    {

        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("images/denah_angkot", $fileName);
            $gambar = $fileName;
        } else {
            $gambar = NULL;
        }
      
          Angkot::find($id)->update([
            'kode_angkot' => $request->get('kode_angkot'),
            'Keterangan'  => $request->get('Keterangan'),
            'rute'        => $request->get('rute'),
            'gambar'      => $gambar
        ]);
                

        // alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('angkot.index');
    }

    public function destroy($id)
    {
       
        $Angkot = \App\Angkot::find($id);
        $Angkot->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('angkot.index');
        
       }
    
}
