<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authentication;
use Illuminate\Support\Facades\Hash;
class AuthenticationController extends Controller
{
    //sign up detail store
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:authentications',

            'password'=>'required',
            'role'=>'required'
            
        ]);
        $userdet=new Authentication();
        $userdet->username=$request->name;
        $userdet->email=$request->email;
        $userdet->password=Hash::make($request->password);
        $userdet->role=$request->role;
        $userdet->save();
 
        return redirect('/Login');
    }
    //sign in details store
    public function check(Request $request)
    {
        $userinfo=Authentication::where('email','=',$request->email)->first();
        if(!$userinfo){
            return back()->with('failmsg','The mail id noes not exist please sign up');
        }
        else{
            if(Hash::check($request->password,$userinfo->password))
            {
                $request->session()->put('user_id',$userinfo->user_id );
                return redirect("/$userinfo->role");
            }
            else{
                return back()->with('failmsg','Password is incorrect');
            }
        }
        
    }
}