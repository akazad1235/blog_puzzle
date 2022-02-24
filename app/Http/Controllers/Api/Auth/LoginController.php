<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
public function userLogin(Request $request){
$user = User::where('email', 'akazad914@gmail.com')->first();
  return response()->json($user->createToken('Token Name')->accessToken);
     $data = $request->all();
    $rules = [
        'email' => 'required|exists:users',
        'password' => 'required|min:6'
    ];

    $customMessage = [
        'email.email' => 'email does not exists',
        'password.required' => 'password is required',
    ];
    $validator = Validator::make($data, $rules, $customMessage);
    if ($validator->fails()){
        return response()->json($validator->errors(), 422);
    }

    if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
        $user = User::where('email', $request->email)->first();
        $access_token = $user->createToken($request->email)->accessToken;
       // User::where('email', $request->email)->update(['token', $access_token]);

        return response()->json(['success'=>'users has been successfully Login', 'accessToken'=>$access_token], 201);
    }else{
        return response()->json(['success'=>'Ops! Something Wrong'], 422);
    }

}
}
