<?php

namespace App\Http\Controllers;
use App\SubKategori;
use App\Kategori;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Datatables;
use Response;
use DB;
use File;


use Illuminate\Http\Request;

class SubKatController extends Controller
{
    private $subkate;


    public function subkat(){

        $subkat = SubKategori::get();

        $response['status'] = 'OK';
        $response['result'] = $subkat;
      
        return Response::json($response);

        // $data = SubKategori::all();
      
        // return response()->json($data,200);

    }
    
    public function index(Request $request)

    {

        
        

        // $data = SubKategori::all();
        $subkategori = SubKategori::all();
        $count = SubKategori::count();
        $gambar = SubKategori::pluck('gambar','id');
        //  dd($subkategori->all());
      
         return view('subkategori.index',compact('subkategori'))->with('count',$count)->with(json_encode($gambar,true));
       
            
        
    }
    public function create(Request $request)
    {
        // return view('subkategori.create');
        $kategori = Kategori::get();

        return view('subkategori.create')
        ->with('kategori',$kategori);

     
    }
    public function edit($id)
    {
         
        $data = SubKategori::findOrFail($id);
      
        $kategori = Kategori::get();
       
        if (empty($data)) {
            Flash::error('Barang not found');

            return redirect(route('subkategori.index'));
        }

        return view('subkategori.edit',compact('data'))->with('subkategori', $data)->with('kategori',$kategori);
    }
    public function store(Request $request)
    {
    
         $input=$request->all();
       
 
        //  dd($request->all());
    

        if($request->hasfile('gambar'))
        {

           foreach($request->file('gambar') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/images/destinasi', $name);  
               $gambar[] = $name;  
           }
        }

        SubKategori::Create( [
            'nama_subkategori' => $input['nama_subkategori'],
            'deskripsi'        => $input['deskripsi'],
            'long'             => $input['long'],
            'lat'              => $input['lat'],
            'no_telp'          => $input['no_telp'],
            'kategori_id'      => $input['kategori_id'],
            'gambar'           => json_encode($gambar),
        ]);

        

      

       
    alert()->success('Berhasil.','Data telah ditambahkan!');       
    return redirect()->route('subkategori.index');
      
    }

    public function show($id)
    {


        $subkat = SubKategori::with('kat')->where('kategori_id',$id)->get();

        $response['status'] = 'OK';
        $response['result'] = $subkat;
     
        return Response::json($response,200);
       
    }
    public function update(Request $request, $id)
    {
        $data = SubKategori::findOrFail($id);
        $input=$request->all();

          if($request->hasfile('gambar'))
        {
            $foto = public_path("/images/destinasi/".$data->gambar);
            if (File::exists($foto)) {
                File::delete($foto);
            }
           foreach($request->file('gambar') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/images/destinasi', $name);  
               $gambar[] = $name;  
           }

        }else{
            $name = $data->nama_subkategori;
        }

          $data->nama_subkategori = $request->nama_subkategori;
          $data->deskripsi = $request->deskripsi;
          $data->long = $request->long;
          $data->lat = $request->lat;
          $data->no_telp = $request->no_telp;
          $data->kategori_id = $request->kategori_id;
          $data->gambar = json_encode($gambar);
          $data->save();
       
                
        return redirect()->route('subkategori.index',compact('data'));
    }

    public function destroy($id)
    {
       
        $kategori = \App\SubKategori::find($id);
        $kategori->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('subkategori.index');
        
       }

       public function list($id){

       
        $subkat = SubKategori::where('id',$id)
                             ->get();
        
        return Response::json($subkat,200);



        
       }

      
   
}

