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
    
        return Response::json($data);
    
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

        StasiunInfo::create([

            'denah_stasiun' => $gambar1,
            'denah_evakuasi' => $gambar2,
            'peta_jaringan' => $gambar3

        ]);

        alert()->success('selamat');
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

        if ($stas) {
         $response['status'] = 'OK';
         $response['result'] = $stas;
        } else {
         $response['status'] = 'ERROR';
         $response['message'] = 'User not found';
        }
      
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
