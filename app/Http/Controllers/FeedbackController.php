<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use File;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use App\Feedbacks;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function feed(){
        $feedback = Feedbacks::all();

        $response['status'] = 'OK';
        $response['result'] = $feedback;
        return Response::json($response); 
    }
    public function index()
    {
        $feedback = Feedbacks::paginate();

      
       return view('feedback.index',compact('feedback'))->with('i', (request()->input('page', 1) - 1) * 10);
     

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $article = Feedbacks::create($request->all());
        return response()->json($article, 201);
        return "Data tersimpan";
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->input('nama');
    $email = $request->input('email');
    $saran = $request->input('saran');

    $data = new \App\Feedbacks();
    $data->nama = $nama;
    $data->email = $email;
    $data->saran = $saran;
    $data->save();

    
    $response['status'] = 'OK';
    $response['result'] = $data;

    return Response::json($response);
   
      
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feed = Feedbacks::where('id',$id)->get();

        $response['status'] = 'OK';
        $response['result'] = $feed;

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
