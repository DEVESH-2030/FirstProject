<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use validate;
use App\loginstudent;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $loginstudent = DB::select('select * from loginstudents');
        return view('login', ['loginstudent'=>$loginstudent]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new loginstudent([
            'name' => $request->get('name'),   
            'email' => $request->get('email'),   
            'password' => $request->get('password')   
        ]);
        $user->save();
        return redirect()->back()->with('success', 'User Login');


/*
|------------ Also can use this--------------------
| here we can use Try & Catch for check and give errors  
|---------------------------------------------------
*/
      //   try{
      //   $rules = [
      //       'name' => 'required',
      //       'email' => 'required',
      //       'password' => 'required'
      //   ];
      //   $message = ['required' => 'The :attribute field is required'];
      //   $validator = validator($request->all(), $rules, $messsage);

      //   if ($validator->fails()) {
      //       return back()->withErrors($validator)->withInput();
      //   }


      //   $user = new loginstudent([
      //       'name' => $request->get('name'),   
      //       'email' => $request->get('email'),   
      //       'password' => $request->get('password')   
      //   ]);
      //   $user->save();
      //   return redirect()->route('user.create')->with('success', 'Data Added');
      // }catch(\Exception $e){
      //   return redirect()->route('user.create')->with('error', $e->getMessage());

      // }

/*---------------- End here -------------*/
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

     public function viewuser()
    {
        return view('login');
    }
}
