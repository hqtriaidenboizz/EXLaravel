<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class userController1 extends Controller
{
    public function hello(){
        // return view('hello') ->with('title',$title);
        // return view('hello') ->with('data',$data);

    }
    public function tinhtong(Request $reaques){
        $sum = $reaques -> A + $reaques -> B;
        return view ('hello' , compact('sum'));
    }

}
