<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Str;
use Validator;
class users extends Controller
{
    public function login(Request $request){
        $rules=[
            'email'=>'required|email',
            'password'=>'required',
        ];
        $validate=Validator::make($request->all(),$rules);
        if ($validate->fails()){
            return response(['status' => false , 'messages' => $validate->messages()]);
        }else{
            if (auth()->attempt(['email'=>$request->email,'password'=>$request->password])){
                $user=auth()->user();
               // $user->api_token= Str::random(60);
                $user->api_token= str_random(60);
                $user->save();
                return response(['status'=>true,'user'=>$user,'api_token'=>$user->api_token]);
            }else{
                return response(['status' => false , 'messages' => 'email or password incorrect']);

            }
        }
    }
}
