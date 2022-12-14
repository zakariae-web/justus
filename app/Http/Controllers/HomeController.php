<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;
use App\Models\inp;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chose()
    {
        return view('/chose');
    }

    public function create()
    {
        return view('cv.create');
    }

    
    public function create2()
    {
        return view('s3.create');
    }
    
    public function admin()
    {
        return view('cv.admin', [
            'cv' => input::all()
           ]);
    }
    public function admin2()
    {
        return view('s3.admin2', [
            's3' => inp::all()
           ]);
    }
}
