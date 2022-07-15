@extends('public.layouts.master')

@section('content')
<div class="otherPages">
    <div class="otherPageheader">
        <h3>Contact</h3>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="pageDetails">
                        <div class="pageDtlsTitle">
                            <!-- <h5>Map & Contact information</h5>
                            <div class="uPaTitle"></div> -->
                        </div>
                        <div class="pageDtlsDescription">
                        <h4></h4>                            
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="contactform">
                                    <h4>Contact Form</h4><hr>
                                     <form action="" method="POST">
                                        <div class="mb-3">
                                            <label class="mb-1">Your Name</label>
                                            <input type="text" name="" class="form-control" >
                                        </div>                                     
                                        <div class="mb-3">
                                            <label class="mb-1">Your Phone</label>
                                            <input type="text" name="" class="form-control" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1">Your Email</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1">Company Name</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1">Address</label>
                                            <textarea name="" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    
                                     </form>
                                 </div>
                             </div>
                             <div class="col-md-6 border-start">
                                <div class="contact-info">
                                    <h4>Comprehensive Security Services Limited</h4><hr>
                                    <div class="contact-address">
                                        <ul>                                            
                                            <li><i class="fa fa-phone" aria-hidden="true"></i>+8801747-654201</li>
                                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@csslsecurity.com</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>Address goes here</li>                                            
                                        </ul>
                                    </div>                                    
                                </div>
                             </div>

                         </div>
                         <div class="row">                             
                             <div class="col-md-12">
                                <div class="contact-info">
                                    <h4>Our Location</h4><hr>                                    
                                    <div class="locationmap">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14607.441831567416!2d90.42195359794816!3d23.75235500682585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slocation%20map!5e0!3m2!1sen!2sbd!4v1657352282184!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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