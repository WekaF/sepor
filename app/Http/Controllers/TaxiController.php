<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use App\Taxi;
use Response;
use Illuminate\Http\Request;

class TaxiController extends Controller
{

    public function taxi(){

        $subkat = Taxi::all();
      
        return response()->json($subkat,200);

    }
    
    public function index()
    {
        $data = Taxi::get();

        $count = Taxi::count();
        return view('taxi.index',compact('data'))->with('count',$count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taxi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Taxi::create([  
            'taxi_name'      => $request->get('taxi_name'),
            'taxi_price'     => $request->get('taxi_price'),
            'taxi_desc'      => $request->get('taxi_desc'),
            
           
        ]);
    alert()->success('Berhasil.','Data telah ditambahkan!');       
    return redirect()->route('taxi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taxi = Taxi::find($id);

        if ($taxi) {
         $response['status'] = 'OK';
         $response['result'] = $taxi;
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
        $data = Taxi::findOrFail($id);
        return view('taxi.edit', compact('data'));
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
        Taxi::find($id)->update([
            'taxi_name'      => $request->get('taxi_name'),
            'taxi_price'     => $request->get('taxi_price'),
            'taxi_desc'      => $request->get('taxi_desc'),
            
           
        ]);
                

         alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('taxi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Taxi::FindOrFail($id);
        $data->delete();

        return redirect()->route('taxi.index');
    }

    public function datataxi(){
        
        return Datatables::of(Taxi::query())->make(true);
    }
}
