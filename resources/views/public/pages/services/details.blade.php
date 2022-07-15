@extends('public.layouts.master')

@section('content')
<div class="otherPages">
    <div class="otherPageheader service-bg">
        <h3>{{$servicedtl->title}}</h3>
    </div>
    <div class="page-content">
        <div class="container">        
            <div class="row">            
                <div class="col-md-12">
                    <div class="pageDetails">
                        <div class="pageDtlsTitle">
                            <h5>{{$servicedtl->short_desc}}</h5>
                        </div>
                        <img class="img-fluid" src="{{asset('uploads/service/'.$servicedtl->serviceimage)}}">
                        <div class="pageDtlsDescription">
                            {!!$servicedtl->fulldesc!!}
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </div>    
</div>


@endsection