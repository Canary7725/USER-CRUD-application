<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;

class LibraryController extends Controller
{
    public function index(){
        $data= Library::get();
        return view('user-list',compact('data'));
    }

    public function addUser(){
        return view('add-user');
    }

    public function saveUser( Request $request){

        $request->validate([
            'name'=> 'required',
            'phone'=>'required',
            'gender'=>'required'
        ]);


        $name=$request->name;
        $phone=$request->phone;
        $gender=$request->gender;

        $users = new Library();
        $users->name=$name;
        $users->phone=$phone;
        $users->gender=$gender;
        $users->save();
        
        return redirect()->back()->with('success',"User Added Sucessfully");


    }

    public function editUser($id){
        $data= Library::where('id','=',$id)->first();

        return view('edit-user',compact('data'));
    }

    public function updateUser(Request $request){
        $request->validate([
            'name'=> 'required',
            'phone'=>'required',
            'gender'=>'required'
        ]);
        $id=$request->id;
        $name=$request->name;
        $phone=$request->phone;
        $gender=$request->gender;

        Library::where('id','=',$id)->update([
            'name'=>$name,
            'phone'=>$phone,
            'gender'=>$gender
        ]);

        return redirect()->back()->with('success',"User Updated Sucessfully");
    }

    public function deleteUser($id){
        Library::where('id','=',$id)->delete();
        return redirect()->back()->with('success',"User Deleted Sucessfully");
    }

}
