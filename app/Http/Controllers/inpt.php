<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inp;

class inpt extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('s3.index', [
            's3' => inp::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('s3.create');
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
        $path = 'images/cv2';
        $request -> image -> move($path,$file_name);

        $s3 = new inp();
        $s3->lastname =$request->input('lastname');
        $s3->twitter =$request->input('twitter');
        $s3->github =$request->input('github');
        $s3->linkcv =$request->input('linkcv');
        $s3['image']= $file_name;

        
        $s3->save();
       return redirect()->route('s3.admin2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $s3 = inp ::findorfail($id);
        return view('s3.show',compact('s3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s3 = inp::findorfail($id);
        return view('s3.edit', [
            's3' => $s3
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
        $s3 = inp::findorfail($id);

        $file_extension = $request -> image -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'images/cv2';
        $request -> image -> move($path,$file_name);


        $s3->lastname =$request->input('lastname');
        $s3->twitter =$request->input('twitter');
        $s3->github =$request->input('github');
        $s3->linkcv =$request->input('linkcv');
        /*$cv->filiere =$request->input('filiere'); */
        $s3['image']= $file_name;

        $s3->save();
       return redirect()->route('s3.admin2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s3 = inp::findorfail($id);
        $s3->delete();
        return redirect()->route('s3.admin2');
    }
}
