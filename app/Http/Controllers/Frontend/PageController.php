<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Social;
use App\Models\Admin\Service;
use App\Models\Admin\News;
use App\Models\Admin\Ourclient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $socials  = Social::orderBy('id', 'DESC')->get();
        $services  = Service::orderBy('id', 'DESC')->get();
        $newses  = News::orderBy('id', 'DESC')->get();
        $ourclients  = Ourclient::orderBy('id', 'DESC')->get();
        return view('public/pages/index', compact('socials','newses','services','ourclients'));
    }
    public function aboutus(){
        return view('public/pages/about-us');
    }  
    public function services(){
        $services  = Service::orderBy('id', 'DESC')->get();
        return view('public/pages/services', compact('services'));
    }  
    public function servicedetails($id){
        $servicedtl  = Service::find($id);
        if(!is_null($servicedtl)){
            return view('public/pages/services/details', compact('servicedtl'));
        }else{            
            return redirect('/');
        }        
    }
    public function news(){
        return view('public/pages/news');
    }  
    public function carrer(){
        return view('public/pages/carrer');
    }  
    public function gallery(){
        return view('public/pages/gallery');
    }  
    public function contact(){
        return view('public/pages/contact');
    }  
     

}
