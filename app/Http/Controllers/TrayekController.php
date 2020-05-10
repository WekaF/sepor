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
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("images/trayek", $fileName);
            $gambar = $fileName;
        } else {
            $gambar = NULL;
        }

        $input=$request->all();

             Trayek::create([  
            'trayek_name'      => $request->get('trayek_name'),
            'trayek_price'     => $request->get('trayek_price'),
            'trayek_desc'      => $request->get('trayek_desc'),
            'gambar'           => $gambar
            
           
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

        if ($request->hasFile('gambar')){
            $gambar = public_path("/images/trayek/".$data->gambar);
            if (File::exists($gambar)) {
                File::delete($gambar);
            }
            $gambar = $request->file('gambar');
            $imgName = $gambar->getClientOriginalName();
            $lok = public_path('/images/trayek/');
            $gambar->move($lok, $imgName);
          } else {
            $imgName = $data->trayek_name;
          }

          $data->trayek_name = $request->trayek_name;
          $data->trayek_price = $request->trayek_price;
          $data->trayek_desc = $request->trayek_desc;
          $data->gambar = $imgName;
          $data->save();
         
        return redirect()->route('trayek.index');
    }

    
    public function destroy($id)
    {
        $data = Trayek::FindOrFail($id);
        $data->delete();

        return redirect()->route('trayek.index');
    }

}
