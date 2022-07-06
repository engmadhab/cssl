@extends('public.layouts.master')

@section('content')
<div class="bannersection">
    @include('public.pages.inc.slider')
</div>
<!-- <div class="aboutsection sectionPadding">
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
</div> -->

<div class="serviceSection sectionPadding">
    <div class="container-fluid custom_container">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h3>Our Services</h3>
                    <div class="underline mx-auto"></div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $services )
                <div class="col-md-3">
                    <div class="serviceBox">
                        <a class="readmoreBtn" href="{{route('servicedetails', $services->id)}}">                            
                        <p><img class="img-fluid" src="{{asset('uploads/service/'.$services->serviceimage)}}"></p>
                        <h3>{{$services->title}}</h3>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div><!-- End: serviceSection -->


<div class="majorSectorWehaveServed sectionPadding">
    <div class="container-fluid custom_container">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h3>Major Sector We have Served</h3>
                    <div class="underline mx-auto"></div>
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="majorBox">
                    <p><img class="img-fluid" src="{{asset('images/major-sector/01.png')}}"></p>
                    <h4>Industrial Area</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="majorBox">
                    <p><img class="img-fluid" src="{{asset('images/major-sector/01.png')}}"></p>
                    <h4>Garments and Textile</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="majorBox">
                    <p><img class="img-fluid" src="{{asset('images/major-sector/01.png')}}"></p>
                    <h4>Health Care & Hospital</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="majorBox">
                    <p><img class="img-fluid" src="{{asset('images/major-sector/01.png')}}"></p>
                    <h4>Tourist Spot and Resort</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="majorBox">
                    <p><img class="img-fluid" src="{{asset('images/major-sector/01.png')}}"></p>
                    <h4>Heavy Construction Area</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="majorBox">
                    <p><img class="img-fluid" src="{{asset('images/major-sector/01.png')}}"></p>
                    <h4>Malls & Plazas</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="majorBox">
                    <p><img class="img-fluid" src="{{asset('images/major-sector/01.png')}}"></p>
                    <h4>Corporate Building</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="majorBox">
                    <p><img class="img-fluid" src="{{asset('images/major-sector/01.png')}}"></p>
                    <h4>Security Devices</h4>
                </div>
            </div>
            
        </div>
    </div>
</div><!-- End: majorSectorWehaveServed -->

<div class="newses sectionPadding">
    <div class="container-fluid custom_container">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h3>News</h3>
                    <div class="underline mx-auto"></div>
                </div>                
            </div>
        </div>
        <div class="row">            
            @foreach ($newses as $news)            
                <div class="col-md-4">
                    <div class="newsbox">
                        <p><img class="img-fluid" src="{{asset('uploads/news/'.$news->news_image)}}"></p>
                        <div class="newsboxDetails">
                            <h3>{{$news->title}}</h3>                        
                            <p>{{$news->news_short_desc}}</p>
                            <a href="#">Read More</a>
                        </div>                        
                    </div>
                </div>
                
            @endforeach 
        </div>
    </div>
</div><!-- End: majorSectorWehaveServed -->

<div class="ourClient sectionPadding">
    <div class="container-fluid custom_container">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h3>Our Valued Clients</h3>
                    <div class="underline mx-auto"></div>
                </div>                
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