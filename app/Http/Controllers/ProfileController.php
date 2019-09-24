<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ProfileController extends Controller
{



    public function store(Request $request){
        $flag=0;
        $data= $request->all();
        //return Response()->json($data,201);
        $userId = \Auth::user()->name;
        if (\Auth::check())
        {
            $user = \Auth::User();
            $profile = $user->profile;
            if(null==$profile){
                return Response()->json(null,404);
            }

            foreach($request->all() as $key=>$value){
                if($profile->$key || null == $profile->$key){
                    $profile->$key =$value;
                    if($profile->save()){
                        $flag=1;
                    }else{
                        $flag=0;
                    }
                }
            }

            if($flag){
                return Response()->json(null,204);
            }else{
                return Response()->json(["status"=>false,"message"=>"Coudn't save"],500);
            }

            return Response()->json(["error"=>["key"=>"Coudn't find key"]],422);

        }
        else{
            return Response()->json(["success"=>false,"message"=>"Your expired expired. Please login again"],405);
        }
    }
}
