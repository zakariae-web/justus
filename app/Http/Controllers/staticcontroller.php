<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class staticcontroller extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function chose() {
        return view('chose');
    }
    
    
}
