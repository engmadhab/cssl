@extends('public.layouts.master')

@section('content')
<div class="otherPages">
    <div class="otherPageheader">
        <h3>Gallery</h3>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="pageDetails">
                        <div class="pageDtlsTitle">
                            <h5>Our Photo Gallery</h5>
                        </div>
                        <div class="pageDtlsDescription">
                            <section class="gallery min-vh-100">
                                <div class="container-lg">
                                    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                                        <div class="col">
                                            <img src="{{asset('images/gallery/01.jpeg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/02.jpeg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/03.jpeg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/04.jpeg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/05.jpg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/06.jpg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/07.jpg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/08.jpg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/09.jpg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/10.jpg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/11.jpg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/gallery/12.jpg')}}" class="gallery-item" alt="gallery">
                                        </div>
                                        
                                    </div>
                                </div>
                            </section>

                            <!-- Modal -->
                            <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{asset('images/gallery/01.jpg')}}" class="modal-img" alt="modal img">
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>               
                    
                </div>            
            </div>
        </div>
    </div>    
</div>
@endsection