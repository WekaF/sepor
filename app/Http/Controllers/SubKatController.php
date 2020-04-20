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
        $subkategori = SubKategori::get();
        $count = SubKategori::count();
      
        return view('subkategori.index',compact('subkategori'))->with('count',$count);
        
        
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
      
        $kategori = Kategori::pluck('nama_kategori','id');
       
        if (empty($data)) {
            Flash::error('Barang not found');

            return redirect(route('subkategori.index'));
        }

        return view('subkategori.edit',compact('data'))->with('subkategori', $data)->with('kategori',$kategori);
    }
    public function store(Request $request)
    {
    
       
        // if(count($request->gambar) != null){
        //     $file = $request->file('gambar');
        //     $gambar = $file[0]->getClientOriginalName();
        //     $gambar->move("/images/destinasi", $file[0]);
        // }else{
        //     dd('gagal');
        //     $gambar = NULL;
        // }

        $input=$request->all();
        $gambar=array();
        if($files=$request->file('gambar')){
            foreach($files as $file){
                $acak=$file->getClientOriginalExtension();
                $dt = Carbon::now();
                $name = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
                $file->move('images/destinasi',$name);
                $gambar[]=$name;
            }
        }
 
    
        SubKategori::Create( [
            'nama_subkategori' => $input['nama_subkategori'],
            'deskripsi'     => $input['deskripsi'],
            'long'        => $input['long'],
            'lat'         => $input['lat'],
            'no_telp'     => $input['no_telp'],
            'kategori_id' => $input['kategori_id'],
            'gambar'      => json_encode($gambar),
        ]);

       
    alert()->success('Berhasil.','Data telah ditambahkan!');       
    return redirect()->route('subkategori.index');
      
    }

    public function show($id)
    {
        // $subkat = SubKategori::find($id);
        $subkat = SubKategori::with('kat')->where('kategori_id',$id)->get();
      
        return Response::json($subkat,200);
       
    }
    public function update(Request $request, $id)
    {
        $data = SubKategori::findOrFail($id);

        SubKategori::find($id)->update($request->all());
                
         alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('subkategori.index',compact('data'));
    }

    public function destroy($id)
    {
       
        $kategori = \App\SubKategori::find($id);
        $kategori->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('subkategori.index');
        
       }

       public function list($id,$detail){

       
        $subkat = SubKategori::with('kat')
                             ->where('kategori_id',$id)
                             ->where('id',$detail)
                             ->get();
        
        return Response::json($subkat,200);


       }

      
   
}

