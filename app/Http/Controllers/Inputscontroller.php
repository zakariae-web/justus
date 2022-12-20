<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;

class Inputscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cv.index', [
            'cv' => input::all()
           ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension = $request -> image -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'images/cv';
        $request -> image -> move($path,$file_name);


        $cv = new input();
        $cv->lastname =$request->input('lastname');
        $cv->twitter =$request->input('twitter');
        $cv->github =$request->input('github');
        $cv->linkcv =$request->input('linkcv');
        $cv->about =$request->input('about');
        $cv['image']= $file_name;
        $cv->userid = auth()->user()->id;
        $cv->save();
       return redirect()->route('cv.admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cv = input ::findorfail($id);
        return view('cv.show',compact('cv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cv = input::findorfail($id);
        return view('cv.edit', [
            'cv' => $cv
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cv = input::findorfail($id);
        
        $cv->lastname =$request->input('lastname');
        $cv->twitter =$request->input('twitter');
        $cv->github =$request->input('github');
        $cv->linkcv =$request->input('linkcv');
        $cv->about =$request->input('about');

        $cv->save();
       return redirect()->route('cv.admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cv = input::findorfail($id);
        $cv->delete();
        return redirect()->route('cv.admin');
    }
}
