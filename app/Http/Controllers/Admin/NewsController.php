<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newses= News::orderBy('id', 'desc')->get();   
        return view('admin.news.index',compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'title'=>'required',
            'news_short_desc'=>'required',
            'news_full_desc'=>'required',
            'news_image'=>'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        $news = new News;
        $news->title = $request->title;
        $news->news_short_desc = $request->news_short_desc;
        $news->news_full_desc = $request->news_full_desc;

        if($request -> hasFile('news_image')){
            $file = $request->file('news_image');
            $name = time()."_".$file->getClientOriginalName();            
            $file->move(public_path('uploads/news'), $name);                       
        } 
        $news->news_image = $name; 
        $news->save();
        return redirect('admin/news')->with('status', 'News successfully added');
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
        $news= News::find($id);
    	return view('admin.news.edit', compact('news'));
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
        

        $news = News::find($id);
        $news->title = $request->title;
        $news->news_short_desc = $request->news_short_desc;
        $news->news_full_desc = $request->news_full_desc;

        if($request -> hasFile('news_image')){
            $file = $request->file('news_image');
            $name = time()."_".$file->getClientOriginalName();            
            $file->move(public_path('uploads/news'), $name);  
            $news->news_image = $name;                      
        } 
        
        $news->save();
        return redirect('admin/news')->with('status', 'News successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $news = News::find($id);
	      if (!is_null($news)) {

	      	//Delete banner image
	      	if (File::exists('uploads/news/'.$news->news_image))
			{
			 	File::delete('uploads/news/'.$news->news_image);
	 		}
	        $news->delete();	        
	      }
	      session()->flash('success', 'news has deleted successfully !!');
	      return back();
    }
}
