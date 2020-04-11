<?php

namespace App\Http\Controllers;
use App\Jalur;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Response;

class JalurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function jalur(){
        
        $jalur = Jalur::all();     
        return response()->json($jalur,200);


    }
    public function index()
    {
        $data = Jalur::all();

        return view('jalur.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('jalur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("images/jalur", $fileName);
            $gambar = $fileName;
        } else {
            $gambar = NULL;
        }
        Jalur::create([  
            'jalur'     => $request->get('jalur'),
            'deskripsi'  => $request->get('deskripsi'),
            'gambar'    => $gambar,
           
        ]);
    alert()->success('Berhasil.','Data telah ditambahkan!');       
    return redirect()->route('jalur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $jalur = Jalur::find($id);

        if ($jalur) {
         $response['status'] = 'OK';
         $response['result'] = $jalur;
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
