<?php

namespace App\Http\Controllers;

use App\SubKategori;
use App\Kategori;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Datatables;
use Response;
use DB;
use File;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class SubKatController extends Controller
{
    private $subkate;


    public function subkat()
    {

        $subkat = SubKategori::get();
      
        $response['status'] = 'OK';
        $response['result'] = $subkat;

        return Response::json($response);

    }

    public function index(Request $request)

    {

        // $data = SubKategori::all();
        $subkategori = SubKategori::all();
        $count = SubKategori::count();
        
        //  dd($subkategori->all());

        return view('subkategori.index', compact('subkategori'))->with('count', $count);
    }
    public function create(Request $request)
    {
        // return view('subkategori.create');
        $kategori = Kategori::get();

        return view('subkategori.create')
            ->with('kategori', $kategori);
    }
    public function edit($id)
    {

        $data = SubKategori::findOrFail($id);

        $kategori = Kategori::get();

        if (empty($data)) {
            Flash::error('Barang not found');

            return redirect(route('subkategori.index'));
        }

        return view('subkategori.edit', compact('data'))->with('subkategori', $data)->with('kategori', $kategori);
    }
    public function store(Request $request)
    {
        $input = $request->all();
      
        if($request->hasfile('gambar')) {
            foreach($request->file('gambar')as $file){
                $name  = $file->getClientOriginalName();
                $path = Storage::putfile('public/images/destinasi', $file);
                $file->move('images/destinasi', $name);
                $gambar[] = $name;
            }
           
        } else {
            $gambar[] = NULL;
        }


        SubKategori::Create([
            'nama_subkategori' => $input['nama_subkategori'],
            'deskripsi'        => $input['deskripsi'],
            'long'             => $input['long'],
            'lat'              => $input['lat'],
            'no_telp'          => $input['no_telp'],
            'kategori_id'      => $input['kategori_id'],
            'gambar'           => json_encode($gambar),
        ]);

        dd(json_encode($gambar));

        alert()->success('Berhasil.', 'Data telah ditambahkan!');
        return redirect()->route('subkategori.index');
    }

    public function show($id)
    {


        $subkat = SubKategori::with('kat')->where('kategori_id',$id)->get();
        
        $response['status'] = 'OK';
        $response['result'] = $subkat;

        return Response::json($response);
       
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data = SubKategori::findOrFail($id);
        $input = $request->all();
        if($request->hasfile('gambar')) {
            foreach($request->file('gambar')as $file){
                $name  = $file->getClientOriginalName();
                $path = Storage::putfile('public/images/destinasi', $file);
                $file->move('images/destinasi', $name);
                $gambar[] = $name;
            }
           
        } else {
            $gambar[] = NULL;
        }


        Subkategori::find($id)->update( [
            'nama_subkategori' => $input['nama_subkategori'],
            'deskripsi'        => $input['deskripsi'],
            'long'             => $input['long'],
            'lat'              => $input['lat'],
            'no_telp'          => $input['no_telp'],
            'kategori_id'      => $input['kategori_id'],
            'gambar'           => json_encode($gambar),
           
        ]);
            // dd(json_encode($gambar));

          alert()->success('Berhasil.','Data telah di Update!');             
        return redirect()->route('subkategori.index',compact('data'));
    
    }

    public function destroy($id)
    {

        $kategori = \App\SubKategori::find($id);
        $kategori->delete();
        alert()->success('Berhasil.', 'Data telah dihapus!');
        return redirect()->route('subkategori.index');
    }

   
}
