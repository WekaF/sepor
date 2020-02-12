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

use Illuminate\Http\Request;

class SubKatController extends Controller
{
    private $subkate;

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function subkat($id){

        // $subkat = SubKategori::all();


        $data = SubKategori::where('kategori_id',$id)->get();
      
        return response()->json($data,200);

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
        $kategori = Kategori::pluck('nama_kategori','id');

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
        // dd($request->all()) ;
     
    //    $sub = SubKategori::find('id');
    //    $subkat = Subkategori::all();

        SubKategori::create([  
            'nama_subkat' => $request->get('nama_subkat'),
            'Deskrip'     => $request->get('Deskrip'),
            'long'        => $request->get('long'),
            'lat'         => $request->get('lat'),
            'kategori_id' => $request->input('kategori_id'),
           
        ]);
    alert()->success('Berhasil.','Data telah ditambahkan!');       
    return redirect()->route('subkategori.index');
      
    }

    public function show($id)
    {

        $data = SubKategori::findOrFail($id);

        return view('subkategori.show', compact('data'));
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

      
   
}

