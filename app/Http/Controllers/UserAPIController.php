<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loginstudent;
use App\Http\Resources\UserAPIResource as UserAPIResource;

class UserAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function getUserAPI()
    {
        // --  Get method also use to fetch the data from database --------
        // $loginstudent = loginstudent::get();
        // return UserAPIResource::collection($loginstudent);


        // --- All Method use to fetch the All data from database ---------
        $loginstudent = loginstudent::all();
        return response()->json($loginstudent);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // ---------    Post method are use to insert the data into database -------
         $loginstudent = new loginstudent();

         $loginstudent->name = $request->input('name');
         $loginstudent->email = $request->input('email');
         $loginstudent->password = $request->input('password');

         $loginstudent->save();
         return response()->json($loginstudent);
    }

    public function showbyid($id)
    {
        $loginstudent = loginstudent::find($id);
        return response()->json($loginstudent);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
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
        $loginstudent = loginstudent::find($id);

        $loginstudent->name = $request->input('name');
        $loginstudent->email = $request->input('email');
        $loginstudent->password = $request->input('password');

        $loginstudent->save();
        return response()->json($loginstudent);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $loginstudent = loginstudent::find($id);
        $loginstudent->delete();
        return response()->json($loginstudent);
        @dd('deleted');
    }

   

}
