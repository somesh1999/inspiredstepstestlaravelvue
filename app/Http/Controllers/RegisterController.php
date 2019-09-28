<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'countrycode' => 'required',
            'phone' => 'required',
            'password'=> 'required'
        ]);

        $checkemail = \App\User::where(['email'=>$request->email])->get();
        if(count($checkemail)>0){
            return Response()->json(["success"=>false,"message"=>"User already exists"],500);
        }
        $user=new \App\User();
        $user->name= $request->name;
        $user->email= $request->email;
        $user->is_email_verified= 1;
        $user->password=bcrypt($request->password);
        if($user->save()){
            $userobj = \App\User::where(["email"=>$request->email])->first();
            $profile = new \App\Profile();
            $profile->user_id=$userobj->id;
            $profile->contact_number = $request->countrycode." ".$request->phone;
            if($profile->save()){
                return Response()->json($user,201);    
            }
            else{
                return Response()->json(["success"=>false,"message"=>"Error while saving"],500);
            }
            
        }else{
            return Response()->json(["success"=>false,"message"=>"Error while saving"],500);
        }
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
}
