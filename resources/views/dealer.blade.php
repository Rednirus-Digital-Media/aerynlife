@extends('layouts.app')
@section('meta_title','')
@section('content')


<!--breadcrumbs-inner-part start-->
	<div class="breadcrumbs-inner-part img2">
		<div class="container">
			<div class="breadcrumbs-inner-bread text-center">
				<h1 class="title-part">DEALER LOCATOR</h1>
				<ul class="breadcrumbs-title">
					<li title="Go to Medvill."><a href="index-2.html">home</a></li>
					<li>DEALER LOCATOR</li>
				</ul>
			</div>
		</div>
	</div>
	<!--breadcrumbs-inner-part start-->

<!-- About Section Start -->
	<div class="rs-about style1 bg2 pt-129 pb-130 md-pt-80 md-pb-83">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 pr-70 md-pr-15 md-mb-30">
					<div class="img-part">
						<img src="images/global.png" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="expertise-part">
						<div class="sec-title mb-60">
						    <h4 style="color:black; font-size: 29px;
    line-height: 47px;
    text-align: left; ">Our Distribution Network</h4>
							<h2 class="title pb-22 md-pb-15">We’re a global and growing team</h2>
							
							<!--<div class="row">
								<div class="col-lg-6">
									<div class="stylelisting">
										<ul class="chevron-right-icon">
											<li>
												24/7 hours support.
											</li>
											<li>
												99% client satisfaction.
											</li>
											<li>
												100% responsive medical theme.
											</li>
											<li>
												Quality team always ready to help.
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="stylelisting">
										<ul class="chevron-right-icon">
											<li>
												Eye Care.
											</li>
											<li>
												Emergency Service.
											</li>
											<li>
												Patient Centered Care.
											</li>
											<li>
												Leading Technology Service.
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>-->
						<div class="rs-count homestyle">
						    <div class="row">
						        <div class="col-sm-4 col-12 xs-mb-30">
						            <div class="rs-counter-list">
							            <div class="counter-top">
							                <span class="counter-number primary-color">1500</span><span class="post-tag"></span>
							            </div>
							            <h3 class="counter-text capitalize"> +Associates</h3>
						            </div>
						        </div>

						        <div class="col-sm-4 col-12 xs-mb-30">
						            <div class="rs-counter-list border-before">
							            <div class="counter-top">
							                <span class="counter-number primary-color">300</span><span class="post-tag">+</span>
							            </div>
						                <h3 class="counter-text capitalize">+ Employees</h3>
						            </div>
						        </div>

						        <div class="col-sm-4 col-12">
						            <div class="rs-counter-list border-before">
							            <div class="counter-top">
							                <span class="counter-number primary-color">1000</span><span class="post-tag">+</span>
							            </div>
						                <h3 class="counter-text capitalize">+ Distributors Across India</h3>
						            </div>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Section End -->


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
                                        <option value="">Select Department</option>
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