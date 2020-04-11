<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\User;
use App\Trayek;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Response;

use Illuminate\Http\Request;

class TrayekController extends Controller
{
   private $trayek;
    
   public function trayek(){

    $data = Trayek::all();

    return response()->json($data,200);

}
    public function index()
    {
        $data = Trayek::get();

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

             Trayek::create([  
            'trayek_name'      => $request->get('trayek_name'),
            'trayek_price'     => $request->get('trayek_price'),
            'trayek_desc'      => $request->get('trayek_desc'),
            'trayek_slug'      => $request->get('trayek_slug'),
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

        if ($trayek) {
         $response['status'] = 'OK';
         $response['result'] = $trayek;
        } else {
         $response['status'] = 'ERROR';
         $response['message'] = 'User not found';
        }
      
        return Response::json($response);
    }

  
    public function edit($id)
    {
        $data = Trayek::findOrFail($id);
        return view('trayek.edit', compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        Trayek::find($id)->update([
            'trayek_name'      => $request->get('trayek_name'),
            'trayek_price'     => $request->get('trayek_price'),
            'trayek_slug'      => $request->get('trayek_slug'),
            'trayek_desc'      => $request->get('trayek_desc'),
            
           
        ]);
                

         alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('trayek.index');
    }

    
    public function destroy($id)
    {
        $data = Trayek::FindOrFail($id);
        $data->delete();

        return redirect()->route('trayek.index');
    }

    public function datatrayek(){
        
        return Datatables::of(Trayek::query())->make(true);
    }
}
