@extends('public.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="otherPages">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="pagetitle">Services</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($services as $services )
                        <div class="col-md-4">
                            <div class="serviceBox">
                                <a class="readmoreBtn" href="{{$services->id}}">
                                    <h3>{{$services->title}}</h3>
                                    <p><img class="img-fluid" src="{{asset('uploads/service/'.$services->serviceimage)}}"></p>
                                    <p>{{$services->short_desc}}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>                            
            </div>            
        </div>
    </div>
</div>
@endsection