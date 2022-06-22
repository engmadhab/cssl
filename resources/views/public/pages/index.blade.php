@extends('public.layouts.master')

@section('content')
<div class="bannersection">
    @include('public.pages.inc.slider')
</div>
<div class="aboutsection sectionPadding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="welcomebox">
                    <h3>Welcome to out site</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quisquam. Similique omnis a eligendi. Atque eius sunt, modi illo odio assumenda? Atque pariatur explicabo id aspernatur nisi voluptatibus iste nulla, fugiat, earum neque animi assumenda dignissimos voluptate beatae adipisci enim.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="welcomeboxintro">
                    <img class="img-fluid" src="{{asset('frontend-assets/uploads/banner-slider/banner03.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div> <!-- End: aboutsection -->

<div class="serviceSection sectionPadding">
    <div class="container-fluid">
        <div class="row">
            @foreach ($services as $services )
                <div class="col-md-3">
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
</div><!-- End: serviceSection -->


<div class="majorSectorWehaveServed sectionPadding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="sectionTitle">Major Sector We have Served</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="servedbox">
                    <h3>Major</h3>
                </div>
            </div>
        </div>
    </div>
</div><!-- End: majorSectorWehaveServed -->

<div class="newses sectionPadding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="sectionTitle">News</h3>
            </div>
        </div>
        <div class="row">            
            @foreach ($newses as $news)            
                <div class="col-md-4">
                    <div class="newsbox">
                        <h3>{{$news->title}}</h3>
                        <p><img class="img-fluid" src="{{asset('uploads/news/'.$news->news_image)}}"></p>
                        <p>{{$news->news_short_desc}}</p>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
</div><!-- End: majorSectorWehaveServed -->

<div class="ourClient sectionPadding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="sectionTitle">Our Client</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="clients_slider owl-carousel owl-theme">
                    @foreach ($ourclients as $ourclient)
                        <div class="item client_logos">
                            <div class="client_img">
                                <a target="_blank" href="{{$ourclient->client_url}}">
                                    <img class="img-fluid" src="{{asset('uploads/ourclient/'.$ourclient->client_image)}}">
                                </a>
                            </div>
                        </div><!--client_logos-->                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><!-- End: majorSectorWehaveServed -->




@endsection