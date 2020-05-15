<?php

namespace App\Http\Controllers;

use App\StasiunInfo;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Response;

use Illuminate\Http\Request;

class StasiunInfoController extends Controller
{
    public function infostat(){

        $data = StasiunInfo::all();

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

        if($request->file('gambar1')) {
            $file = $request->file('gambar1');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar1')->move("images/denah", $fileName);
            $gambar1 = $fileName;
        } else {
            $gambar1 = NULL;
        }

        if($request->file('gambar2')) {
            $file = $request->file('gambar2');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar2')->move("images/denah", $fileName);
            $gambar2 = $fileName;
        } else {
            $gambar2 = NULL;
        }

        
        if($request->file('gambar3')) {
            $file = $request->file('gambar3');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar3')->move("images/denah", $fileName);
            $gambar3 = $fileName;
        } else {
            $gambar3 = NULL;
        }

        if($request->file('gambar4')) {
            $file = $request->file('gambar4');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar4')->move("images/denah", $fileName);
            $gambar4 = $fileName;
        } else {
            $gambar4 = NULL;
        }

        

        StasiunInfo::create([

            'denah_stasiun' => $gambar1,
            'prosedur_evakuasi' => $gambar2,
            'peta_jaringan' => $gambar3,
            'denah_evakuasi' => $gambar4,
            'stand_komersil' =>$request->get('stand_komersil'),


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
        $stas = StasiunInfo::find($id);

        $response['status'] = 'OK';
        $response['result'] = $stas;

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
        return view('stasiuninfo.edit');
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
        $data = stasiuninfo::findOrFail($id);

        if($request->file('gambar1')) {
            $file = $request->file('gambar1');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar1')->move("images/denah", $fileName);
            $gambar1 = $fileName;
        } else {
            $gambar1 = NULL;
        }

        if($request->file('gambar2')) {
            $file = $request->file('gambar2');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar2')->move("images/denah", $fileName);
            $gambar2 = $fileName;
        } else {
            $gambar2 = NULL;
        }

        
        if($request->file('gambar3')) {
            $file = $request->file('gambar3');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar3')->move("images/denah", $fileName);
            $gambar3 = $fileName;
        } else {
            $gambar3 = NULL;
        }

        if($request->file('gambar4')) {
            $file = $request->file('gambar4');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar4')->move("images/denah", $fileName);
            $gambar4 = $fileName;
        } else {
            $gambar4 = NULL;
        }

        stasiuninfo::find($id)->update([
            'denah_stasiun' => $gambar1,
            'prosedur_evakuasi' => $gambar2,
            'peta_jaringan' => $gambar3,
            'denah_evakuasi' => $gambar4,
            'stand_komersil' =>$request->get('stand_komersil'),
        ]);

        alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('stasiuninfo.index',compact('data'));
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
