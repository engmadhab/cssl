@extends('public.layouts.master')

@section('content')
<div class="otherPageheader service-bg">
    <h3>Services</h3>
</div>
<div class="otherPages">
    <div class="container">                
        <div class="row">
            @foreach ($services as $services )
                <div class="col-md-4">
                    <div class="serviceBox">
                        <a class="readmoreBtn" href="{{$services->id}}">                                    
                            <p><img class="img-fluid" src="{{asset('uploads/service/'.$services->serviceimage)}}"></p>
                            <h3>{{$services->title}}</h3>
                        </a>
                    </div>
                </div>
            @endforeach                    
        </div>
    </div>
</div>
@endsection