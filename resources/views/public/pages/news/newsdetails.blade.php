@extends('public.layouts.master')

@section('content')
<div class="otherPages">
    <div class="otherPageheader">
        <h3>{{$newsdetails->title}}</h3>
    </div>
    <div class="page-content">
        <div class="container">        
            <div class="row">            
                <div class="col-md-12">
                    <div class="pageDetails">
                        <div class="pageDtlsTitle">                           
                            <h5>{{$newsdetails->news_short_desc}}</h5>
                        </div>
                        <img class="img-fluid" src="{{asset('uploads/news/'.$newsdetails->news_image)}}">
                        <div class="pageDtlsDescription">
                            {!!$newsdetails->news_full_desc!!}
                        </div>
                        <div class="createdate">
                            {{$newsdetails->created_at}}
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </div>    
</div>


@endsection