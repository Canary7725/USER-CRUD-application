<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin;
use Session;

class AdminController extends Controller
{
    public function verify(Request $request){
        $request->validate([
            'user'=> 'required',
            'pass'=>'required'
        ]);


        $user=Admin::where('user','=',$request->user)->first();
        if($user){
            if($request->pass==$user->pass){
                //Success
                $request->session()->put('loginId',$user->id);
                return redirect('user-list');
            }else{
                return back()->with('fail','Incorrect Password');
            }

        }else{
            return back()->with('fail','Invalid Username');
        }
    }
  
    }
