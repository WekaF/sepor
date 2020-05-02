<?php

namespace App\Http\Controllers;

use App\DetailKA;
use App\JenisKA;
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
        // $jalur = Jalur::where('jalur');

        // dd($data->all());
        
        return view('keretainfo.index',compact('data'))->with('jenis',$jenis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $jenis = JenisKA::get();
        return view('keretainfo.create',compact('jenis'));
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
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar1')->move("images/keretainfo", $fileName);
            $gambar1 = $fileName;
        } else {
            $gambar1 = NULL;
        }

        if($request->file('gambar2')) {
            $file = $request->file('gambar2');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar2')->move("images/keretainfo", $fileName);
            $gambar2 = $fileName;
        } else {
            $gambar2 = NULL;
        }

        DetailKA::create([  
            'nama_kereta'        => $request->get('nama_kereta'),
            'no_ka'              => $request->get('no_ka'),
            'jam'                => $request->get('jam'),
            'kelaska'            => $request->get('kelaska'),
            'relasi'             => $request->get('relasi'),
            'jenis_id'           => $request->input('jenis_id'),
            'keterangan'         => $request->get('keterangan'),
            'progres_stasiun'    => $gambar1,
            'gambar_jalur'       => $gambar2,
           
        ]);
       
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
        // dd($request->all());

        $data = DetailKA::findOrFail($id);

        if($request->file('gambar1')) {
            $file = $request->file('gambar1');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar1')->move("images/keretainfo", $fileName);
            $gambar1 = $fileName;
        } else {
            $gambar1 = NULL;
        }

        if($request->file('gambar2')) {
            $file = $request->file('gambar2');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar2')->move("images/keretainfo", $fileName);
            $gambar2 = $fileName;
        } else {
            $gambar2 = NULL;
        }
        DetailKA::find($id)->update([  
            'nama_kereta'        => $request->get('nama_kereta'),
            'no_ka'              => $request->get('no_ka'),
            'jam'                => $request->get('jam'),
            'kelaska'            => $request->get('kelaska'),
            'relasi'             => $request->get('relasi'),
            'jenis_id'           => $request->input('jenis_id'),
            'keterangan'         => $request->get('keterangan'),
            'progres_stasiun'    => $gambar1,
            'gambar_jalur'       => $gambar2,
           
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
