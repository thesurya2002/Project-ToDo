<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddtodoController extends Controller
{
    public function index(){
        return view('index');
    }

    public function add(REQUEST $request){
        $request->validate([
            'title'=>'required',
            'desc'=>'required',
        ]);
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
    }
}
