<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadPages extends Controller{
    public function index(){
        return view('index');

    }
}
