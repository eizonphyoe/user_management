<?php

namespace App\Http\Controllers;
use App\Models\usermodel;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(){
        usermodel::create([
            'name'=>request()->name,
            'email'=>request()->email,
            'phone'=>request()->phone,
            'address'=>request()->address,
            'user_type'=>request()->user_type
        ]);
        //echo "inserted";
        $data=usermodel::all();
        return view('dashboard',compact('data'));
    }
}
