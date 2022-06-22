<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Ourclient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;

class OurclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourclients= Ourclient::orderBy('id', 'desc')->get();   
        return view('admin.ourclient.index',compact('ourclients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ourclient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'client_name'=>'required',
            'client_url'=>'required',
            'client_image'=>'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        $ourclient = new Ourclient;
        $ourclient->client_name = $request->client_name;
        $ourclient->client_url = $request->client_url;

        if($request -> hasFile('client_image')){
            $file = $request->file('client_image');
            $name = time()."_".$file->getClientOriginalName();            
            $file->move(public_path('uploads/ourclient'), $name);                       
        } 
        $ourclient->client_image = $name; 
        $ourclient->save();
        return redirect('admin/ourclient')->with('status', 'Ourclient successfully added');
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
        $ourclient= Ourclient::find($id);
    	return view('admin.ourclient.edit', compact('ourclient'));
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
        $ourclient = Ourclient::find($id);
        $ourclient->client_name = $request->client_name;
        $ourclient->client_url = $request->client_url;

        if($request -> hasFile('client_image')){
            $file = $request->file('client_image');
            $name = time()."_".$file->getClientOriginalName();            
            $file->move(public_path('uploads/ourclient'), $name);   
            $ourclient->client_image = $name;                     
        } 
        
        $ourclient->save();
        return redirect('admin/ourclient')->with('status', 'Ourclient successfully added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $ourclient = Ourclient::find($id);
	      if (!is_null($ourclient)) {

	      	//Delete banner image
	      	if (File::exists('uploads/ourclient/'.$ourclient->client_image))
			{
			 	File::delete('uploads/ourclient/'.$ourclient->client_image);
	 		}
	        $ourclient->delete();	        
	      }
	      session()->flash('success', 'Ourclient has deleted successfully !!');
	      return back();
    }
}
