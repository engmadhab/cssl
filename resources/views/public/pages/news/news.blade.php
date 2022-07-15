@extends('public.layouts.master')
@section('content')
<div class="otherPages">
    <div class="otherPageheader">
        <h3>Latest News / Events</h3>
    </div>
    <div class="otherPages">
        <div class="container">
            @foreach ($newses as $news )
                <div class="NewsBoxInnerPage">  
                    <div class="row">         
                        <div class="col-md-6">             
                            <img class="img-fluid" src="{{asset('uploads/news/'.$news->news_image)}}">
                        </div>                    
                        <div class="col-md-6">
                            <div class="pageDtlsTitle">
                            <h5>{{$news->title}}</h5>
                            </div>
                            <div class="pageDtlsDescription">
                                <p>{{$news->news_short_desc}}</p>
                                <p><a class="readmorebtn" href="{{route('newsdetails',$news->id)}}"><span>Read More</span></a></p>
                            </div>    
                            <div class="publishdate">
                                <h6>Published: {{$news->created_at}}</h6>
                            </div>                        
                        </div>
                    </div>                                   
                </div>
            @endforeach 
        </div>
    </div>      
</div>
@endsection
