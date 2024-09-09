 
@extends('layouts.app')
@section('meta_title',)
@section('meta_keywords',)
@section('meta_description',)

   
@section('content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/61.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>Contact Us</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            
		    
                 
            <section id="services" class="services-area pt-120 pb-90 fix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                         <div class="contact-bg02 ">
                            <div class="section-title  mb-50">
                                <h5>Contact</h5>
                                
                              
                            </div>
                                
						<form action="/enquiry/store" method="POST" class="contact-form mt-30">
						    @csrf
							<div class="row">
                            <div class="col-lg-6">
                                <div class=" c-name mb-30" >                                    
                                    <input type="text" id="name" name="name" placeholder="Name" required style="width: 100%;border-radius: 10px;padding: 10px;border: 1px solid;"> 
                                </div>                               
                            </div>
							<div class="col-lg-6">                               
                                <div class=" c-email mb-30">                                    
                                    <input type="text" id="city" name="city" placeholder="City" required style="width: 100%;border-radius: 10px;padding: 10px;border: 1px solid;">
                                </div>                                
                            </div>
							<div class="col-lg-6">                               
                                <div class=" c-subject mb-30">                                   
                                    <input type="text" id="email" name="email" placeholder="Email" required style="width: 100%;border-radius: 10px;padding: 10px;border: 1px solid;">
                                </div>
                            </div>		
                            <div class="col-lg-6">                               
                                <div class=" c-subject mb-30">                                   
                                    <input type="text" id="phone" name="phone" placeholder="Phone No." required style="width: 100%;border-radius: 10px;padding: 10px;border: 1px solid;">
                                </div>
                            </div>	
                            
                            <div class="col-lg-12">
                                <div class=" c-message mb-30">                                  
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message" style="width: 100%;border-radius: 10px;padding: 10px;border: 1px solid;"></textarea>
                                </div>
                                <div class="slider-btn" style="display:flex;justify-content:center;">                                          
                                            <button ype="submit" class="btn ss-btn active" data-animation="fadeInRight" data-delay=".8s">Submit Now</button>				
                                        </div>                             
                            </div>
                            </div>
                        
                    </form>
                            
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                         <div class="col-lg-6 col-md-6">
                             
                           <div class="services-box contact-box text-center mb-30">
                              <div class="services-icon">
                                   <i class="fal fa-envelope"></i>
                                </div>
                               <div class="services-content2">
                                    <h5>Email Address</h5>   
                                    <p>aerynlife@gmail.com </p>
                                </div>
                            </div>   
                             
                         
                        </div>
                         <div class="col-lg-6 col-md-6">
                             
                          <div class="services-box contact-box text-center mb-30">
                              <div class="services-icon">
                                   <i class="fal fa-phone-alt"></i>
                                </div>
                               <div class="services-content2">
                                    <h5>Phone Number</h5>   
                                     <p> +918689073131 </p>
                                     
                                </div>
                            </div>   
                             
                         
                        </div>
                         <div class="col-lg-6 col-md-6">
                             
                           <div class="services-box contact-box text-center mb-30">
                              <div class="services-icon">
                                  <i class="fal fa-map-marked"></i>
                                </div>
                               <div class="services-content2">
                                    <h5>Corporate Office:</h5>   
                                    <p>6th Phase, J.P Nagar, Banglore-78</p>
                                </div>
                            </div>   
                             
                         
                        </div>
                         <div class="col-lg-6 col-md-6">
                             
                          <div class="services-box contact-box text-center mb-30">
                              <div class="services-icon">
                                 <i class="fal fa-map-marked"></i>
                                </div>
                               <div class="services-content2">
                                    <h5>Admin Office : </h5>   
                                    <p>
                                    Arjun Nagar, Nanhera, Kuldeep Nagar, Ambala Cantt-133001
                                    </p>
                                </div>
                            </div>   
                             
                         
                        </div>
                        
                    </div>
                        
                        </div>
                        
                    </div>
                   
                    
                </div>
            </section>
            <!-- services-area-end -->
            	
         
        </main>
        <!-- main-area-end -->
     @endsection       