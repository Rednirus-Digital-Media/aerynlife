@extends('layouts.app')
@section('meta_title','')
@section('content')
<!--breadcrumbs-inner-part start-->
	<div class="breadcrumbs-inner-part img2">
		<div class="container">
			<div class="breadcrumbs-inner-bread text-center">
				<h1 class="title-part">financial-information</h1>
				<ul class="breadcrumbs-title">
					<li title="Go to Medvill."><a href="index-2.html">home</a></li>
					<li>financial-information</li>
				</ul>
			</div>
		</div>
	</div>
	<!--breadcrumbs-inner-part start-->
	<!-- Contact Section Start -->
    <div id="rs-contact" class="rs-contact pt-122 md-pt-72 bg14">
        <div class="container">
            
            <div class="contact-wrap">
                <div class="contact-address common md-mb-30">
                    <div class="detail-content wow fadeInLeft" data-wow-delay="0.10s">
                        <div class="icon-part">
                            <i class="flaticon-phone"></i>
                        </div>
                        <div class="address-text">
                            <h3 class="contact-title">Emergency Call</h3>
                            <a href="tel:088-589-8745"> +91 90410 41322</a>
                        </div>
                    </div>
                    <div class="detail-content wow fadeInLeft" data-wow-delay="0.20s">
                        <div class="icon-part">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="address-text">
                            <h3 class="contact-title">Email Us</h3>
                            <a href="mailto:support@rstheme.com">Support@alna.care</a>
                        </div>
                    </div>
                    <div class="detail-content wow fadeInLeft" data-wow-delay="0.30s">
                        <div class="icon-part">
                            <i class="flaticon-comment"></i>
                        </div>
                        <div class="address-text">
                            <h3 class="contact-title">Phone No.</h3>
                            <span>+91 70157 36436</span>
                        </div>
                    </div>
                    <div class="detail-content wow fadeInLeft" data-wow-delay="0.40s">
                        <div class="icon-part">
                            <i class="flaticon-location"></i>
                        </div>
                        <div class="address-text">
                            <h3 class="contact-title">Address</h3>
                            <span> Plot No. 270, HSIIDC Industrial Estate Alipur- Barwala Distt. Panchkula (H.R) - 134118</span>
                        </div>
                    </div>
                </div>
                <div class="form-part common">
                    <h1 style="color:#fff;">Connect with our financial team to learn more about investing with us!</h1>
                    
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="https://rstheme.com/products/html/medvill/mailer.php">
                        <div class="row">
                            <div class="col-sm-6 mb-30">
                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-sm-6 mb-30">
                                <input class="from-control" type="email" id="email" name="email" placeholder="E-mail" required>
                            </div>
                            <div class="col-sm-6 mb-30">
                                <input class="from-control" type="text" id="phone_number" name="phone_number" placeholder="Phone number" required>
                            </div>
                            <div class="col-sm-6 mb-30">
                                <div class="select-option">
                                    <select class="from-control" required>
                                        <option value="">Select services</option>
                                        <option value="">Third-Party Manufacturing</option>
                                        <option value="">PCD Pharma Franchise</option>
                                        <option value="">Ethical Range</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-40">
                                <textarea class="from-control" id="message" name="message" placeholder=" Your messege here" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="submit-btn">
                                    <button type="submit" class="readon jambo">Submit now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Contact Section End -->
	<br>
	<br>
    <br>
    <br>



	
	
	
	
	
	
	@endsection