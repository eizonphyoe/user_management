<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usermodel;

class UpdateController extends Controller
{
    public function update($id){
        $data=usermodel::where("id",$id)->first();
        return view('update',compact('data'));
    }
    public function updatedata($id){
        usermodel::where('id',$id)->update([
            'name'=>request()->name,
            'email'=>request()->email,
            'phone'=>request()->phone,
            'address'=>request()->address,
            'user_type'=>request()->user_type

        ]);

        //echo "update successed";
        $data=usermodel::all();
       return view('dashboard',compact('data'));
    }

}
