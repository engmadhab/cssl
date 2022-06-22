<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use File;

class ServiceController extends Controller
{
    public function index(){     
        $services= Service::orderBy('id', 'desc')->get();   
        return view('admin.service.index',compact('services'));
    }
    public function create(){        
        return view('admin.service.create');
    }

    public function store(Request $request){

        //dd($request);
        $request->validate([
            'title'=>'required',
            'short_desc'=>'required',
            'fulldesc'=>'required',
            'serviceimage'=>'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        $service = new Service;
        $service->title = $request->title;
        $service->short_desc = $request->short_desc;
        $service->fulldesc = $request->fulldesc;

        if($request -> hasFile('serviceimage')){
            $file = $request->file('serviceimage');
            $name = time()."_".$file->getClientOriginalName();            
            $file->move(public_path('uploads/service'), $name);                       
        } 
        $service->serviceimage = $name; 
        $service->save();
        return redirect('admin/service')->with('status', 'Service successfully added');
    }
    public function edit($id){
        $service= Service::find($id);
    	return view('admin.service.edit', compact('service'));
    }
    public function update(Request $request, $id){
        $service = Service::find($id);
        $service->title = $request->title;
        $service->short_desc = $request->short_desc;
        $service->fulldesc = $request->fulldesc;
        if(($request->serviceimage)>0){
            if (File::exists('uploads/service/'.$service->serviceimage))
                {
                    File::delete('uploads/service/'.$service->serviceimage);
                }
                $file = $request->file('serviceimage');
                $name = time()."_".$file->getClientOriginalName();            
                $file->move(public_path('uploads/service'), $name); 
                $service->serviceimage = $name;
            }        
        $service->save();
        
        return redirect('admin/service');
    }
    public function delete($id)
	   {
	      $service = Service::find($id);
	      if (!is_null($service)) {

	      	//Delete banner image
	      	if (File::exists('uploads/service/'.$service->serviceimage))
			{
			 	File::delete('uploads/service/'.$service->serviceimage);
	 		}
	        $service->delete();	        
	      }
	      session()->flash('success', 'Service has deleted successfully !!');
	      return back();
	   }
}
