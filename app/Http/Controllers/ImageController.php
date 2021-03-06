<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Carbon\Carbon;
use Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images =  Image::all();
        return view('hasil',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = new Image;

        if($request->hasFile('image')){
            $images->image = $this->uploads($request);
        }

        else {
            $filenameToStore = NULL;

        }
        $images->save();
        return redirect()->route('image.index');
    }

    public function uploads (Request $request) {

        $file = $request->file('image') ;
        $filename = Carbon::now()->toDateString().$file->getFilename().'.'.$file->extension();
        $path = $file->storeAs('image', $filename, 'public') ;
        return $path ;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
