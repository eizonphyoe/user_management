<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminmodel;
use App\Models\usermodel;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function checkpsw(Request $request){

       $admin=adminmodel::where('username',$request->input('username'))->get();
       //echo $admin->username;
      // echo $admin;
       if($admin!='[]'){
        if($admin[0]->password==$request->input('password'))
        {
            $request->session()->put('user',$admin[0]->username);
            $data=usermodel::all();
            return view('dashboard',compact('data'));

        }else{

           // return redirect('/login')->back()->with('message','Something wrond & try again!');
            //return redirect()->route('login')->with('error','Something wrond & try again!');
            echo "Something wrong & try again!";
            return veiw('/login');

        }
       }else{
        //return redirect()->route('login')->with('error','Something wrond & try again!');
        echo "Something wrong & try again!";
        return view('/login');

       }



    }

}
