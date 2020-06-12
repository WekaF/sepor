<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Trayek;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Response;
use File;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class TrayekController extends Controller
{
   private $trayek;
    
   public function trayek(){

    $data = Trayek::all();

    $response['status'] = 'OK';
    $response['result'] = $data;

        return Response::json($response);

}
    public function index()
    {
        $data = Trayek::all();

        $count = Trayek::count();

        return view('trayek.index',compact('data'))->with('count',$count);
    }

 
    public function create(Request $request)
    {


        return view('trayek.create');
       

    }

    
    public function store(Request $request)
    {
        // dd($request->all());
        if($request->hasfile('gambar')) {
            foreach($request->file('gambar')as $file){
                $name  = $file->getClientOriginalName();
                $path = Storage::putfile('public/images/trayek', $file);
                $file->move('images/trayek', $name);
                $gambar[] = $name;
            }
           
        } else {
            $gambar[] = NULL;
        }

        $input=$request->all();

             Trayek::create([  
            'trayek_name'      => $request->get('trayek_name'),
            'trayek_price'     => $request->get('trayek_price'),
            'trayek_desc'      => $request->get('trayek_desc'),
            'gambar'           => json_encode($gambar),
            
           
        ]);

    alert()->success('Berhasil.','Data telah ditambahkan!');       
    return redirect()->route('trayek.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trayek = Trayek::find($id);

        $response['status'] = 'OK';
        $response['result'] = $trayek;

        return Response::json($response);
    }

  
    public function edit($id)
    {
        $data = Trayek::findOrFail($id);
        return view('trayek.edit', compact('data'));
    }

   
    public function update(Request $request, $id)
    {

        $data = Trayek::find($id);

        $input=$request->all();

        if($request->hasfile('gambar')) {
            foreach($request->file('gambar')as $file){
                $name  = $file->getClientOriginalName();
                $path = Storage::putfile('public/images/trayek', $file);
                $file->move('images/trayek', $name);
                $gambar[] = $name;
            }
           
        } else {
            $gambar[] = NULL;
        }

        Trayek::find($id)->update([  
            'trayek_name'      => $request->get('trayek_name'),
            'trayek_price'     => $request->get('trayek_price'),
            'trayek_desc'      => $request->get('trayek_desc'),
            'gambar'           => json_encode($gambar),
            
           
        ]);
         
          alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('trayek.index');
    }

    
    public function destroy($id)
    {
        $data = Trayek::FindOrFail($id);
        $data->delete();

        alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('trayek.index');
    }

}
