<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usermodel;

class ReadController extends Controller
{
    public function showall(){
        $data=usermodel::all();
       return view('dashboard',compact('data'));
    }
}
