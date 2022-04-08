<?php

namespace App\Http\Controllers;
use App\Models\usermodel;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id){
        usermodel::where('id',$id)->delete();

        //echo "delete successed";
        $data=usermodel::all();
       return view('dashboard',compact('data'));

}
}
