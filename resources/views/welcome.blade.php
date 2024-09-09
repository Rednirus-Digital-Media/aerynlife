@extends('layouts.app')
@section('meta_title','Cardiazone')

@section('meta_keywords')


@section('meta_description')

@section('content')

@section('home_highlight', 'higlgt_cls')

@section('content')


<style>
    .slider {
  width: 100%;
  height: 200px;
  position: relative;
  margin: auto;
  overflow-x: scroll;
  overflow-y: hidden;
}

.slider::-webkit-scrollbar {
  display: none;
}

.slider .slide {
  display: flex;
  position: absolute;
  left: 0;
  transition: 0.3s left ease-in-out;
}

.slider .item {
  margin-right: 10px;
}

.slider .item:last-child {
  margin-right: 0;
}

.ctrl {
  text-align: center;
  margin-top: 5px;
}

.ctrl-btn {
  padding: 20px 20px;
  min-width: 50px;
  background: #fff;
  border: none;
  font-weight: 600;
  text-align: center;
  cursor: pointer;
  outline: none;

  position: absolute;
  top: 50%;
  margin-top: -27.5px;
}

.ctrl-btn.pro-prev {
  left: 0;
}

.ctrl-btn.pro-next {
  right: 0;
}

.single-slider2 {
    background: url(img/slider/banner.jpg) no-repeat;
    background-size: cover;
    background-position: center center;
    width: 100%;
    display: flex;
    align-items: center; /* Vertically center the content */
    margin-bottom: 0; /* Remove any bottom margin */
}

@media (max-width: 768px) {
    
    .single-slider2 {
        background-size: contain;
        background-position: center top; /* Center vertically and position at the top */
        height: auto; /* Adjust height as needed */
        margin-bottom:0px!important;
    }
    .res_banner{
        height:260px;
    }
}

@media (max-width: 576px) {
    .single-slider2 {
        background-size: contain;
        background-position: center top; /* Center vertically and position at the top */
        height: auto; /* Adjust height as needed */
        margin-bottom:0px!important;
    }
    .res_banner{
        height:260px;
    }
}

.count:after {
    content: "+";
}





</style>
 
        <div class="res_banner">
             <div class="single-slider2 mb-5">
        </div>
        </div>
       



            <!-- slider-area-end -->
            <!-- services-area -->          
             <section id="services2 my-5" class="services-area2 pb-20 fix p-relative"  >
                
                <div class="container">
                    <div class="row">
                       <div class="col-lg-4 col-md-6">                             
                          <div class="services-box2 mb-30">
                              <div class="services-icon">
                                 <img src="img/brand/vision55.png" alt="img">
                                </div>
                               <div class="services-content2">
                                   <h5>Our Vision </h5>   
                                    <p>Aeryn Lifesciences envisions becoming a global leader in providing innovative and high-quality pharma products. We strive to improve access to healthcare and enhance the well-being of people worldwide.</p>
                                </div>
                            </div>              
                        </div>
                        <div class="col-lg-4 col-md-6">                             
                          <div class="s-single-services services-box2 mb-30">
                              <div class="services-icon">
                                  <img src="img/brand/mission 55.png" alt="img">
                                </div>
                               <div class="services-content2">
                                   <h5>Our Mission</h5>   
                                    <p>Our mission at Aeryn Lifesciences is to develop and deliver safe, effective, and affordable pharmaceutical products. We are dedicated to advancing healthcare through research, innovation.</p>
                                </div>
                            </div>              
                        </div>
                       <div class="col-lg-4 col-md-6">                             
                          <div class="s-single-services services-box2 mb-30">
                              <div class="services-icon">
                                     <img src="img/brand/why55.png" alt="img">
                                </div>
                               <div class="services-content2">
                                    <h5>Our Goal</h5>   
                                    <p>Our goal is to be a trusted partner in healthcare, known for our commitment to excellence, integrity, and customer satisfaction. We aim to expand our product portfolio, reach new markets, and improve healthcare.</p>
                                </div>
                            </div>              
                        </div>
                        
                        
                        
                        
                    </div>
                </div>
            </section>
            <!-- services-area-end -->
            
          
            
            <!-- about-area -->
            <section id="about2" class="about-area about-p pt-20 pb-20 p-relative" style="background: url(img/bg/about-bg.png) no-repeat; background-position: right bottom;">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                            <div class="s-about-img p-relative  wow fadeInLeft  animated"   data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/features/about57.jpg" alt="img">    
                            </div>
                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                 
                                    <h3>Explore Aeryn Lifesciences Pvt. Ltd. - Your Leading Partner for Quality Pharma Products</h3>   
                                   
                                </div>
                                
                                <p>Welcome to Aeryn Lifesciences Pvt. Ltd., a leading name in the world of Pharmaceutical industry. Our company is a WHO-GMP, GLP certified company providing DCGI-approved products. We're on a mission to redefine healthcare standards through our PCD Pharma Franchise. Committed to advancing human well-being, we specialize in researching, developing, and producing top-quality pharmaceuticals that fulfill to the pharma needs. </p>
                             <p>At Aeryn Lifesciences, we're guided by values of integrity, innovation, and compassion, committed to enhancing the health and happiness of individuals worldwide. Join us in our journey towards a healthier future. Our company have years of experience and expertise in the pharma franchise business. We have introduced ourself with 400+ pharma products that has 100% efficacy and quality. </p>
                      
                            </div>
                        </div>
                     
                    </div>
                    
                </div>
            </section>
            <!-- about-area-end -->
            
            
            	
              <!-- counter-area -->
            <div  class="counter pt-60 pb-20 my-5" style="background:#2f3932;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter mb-30 wow fadeInUp  animated" >
                                <div class="counter p-relative">
                                    <div class="icon"><img src="img/icon/tm-icon01.png" alt="ctm"></div>
                                     <div class="text">
                                    <span class="count">400</span>
                                           <strong>Our Products</strong>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter mb-30 wow fadeInUp  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="counter p-relative">
                                    <div class="icon"><img src="img/icon/tm-icon02.png" alt="ctm"></div>
                                     <div class="text">
                                    <span class="count">1500</span>
                                         <strong>Operation Cities</strong>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter mb-30 wow fadeInUp  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="counter p-relative">
                                    <div class="icon"><img src="img/icon/tm-icon03.png" alt="ctm"></div>
                                     <div class="text">
                                    <span class="count">1000</span>
                                         <strong>Happy Clients</strong>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter  mb-30 wow fadeInUp  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="counter p-relative">
                                    <div class="icon"><img src="img/icon/tm-icon04.png" alt="ctm"></div>
                                     <div class="text">
                                    <span class="count">10</span>
                                          <strong>Years of Experience</strong>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                  
                  
                    </div>
                
                </div>
            </div>
             <!-- counter-area-end -->
            
              <!-- about-area -->
            <section id="about2" class="about-area about-p pt-20 pb-20 p-relative my-5" style="background: url(img/bg/about-bg.png) no-repeat; background-position: left bottom;">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                            <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                  
                                     <h3>Why Choose us as Pharma Franchise Company?</h3>  
                                   
                                </div>
                                
                                </p><b>Aeryn Lifesciences</b> is the best choice for a <b>PCD Pharma Franchise Company</b> due to our commitment to quality, innovation, and customer satisfaction. We offer a wide range of high-quality pharmaceutical products at competitive prices, along with marketing support and timely delivery. Partner with us for a successful and rewarding business.</p>
                                <p><b>Attractive Pricing and Profit Margins:</b> We believe in offering competitive pricing for our products, coupled with attractive profit margins for our partners. </p>
                                <p><b>Quality Products:</b> We offer a wide range of high-quality pharmaceutical products manufactured in state-of-the-art facilities adhering to stringent quality standards.</p>
                               <p><b>Timely Delivery:</b> We ensure timely delivery of products to help you maintain a steady supply chain and meet the demands of your customers.</p>
                                <p><b>Marketing Support:</b> We provide comprehensive marketing support, including promotional materials, advertising strategies, and guidance to help you effectively market our products.</p>
                            </div>
                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                           <div class="s-about-img p-relative  wow fadeInLeft  animated"   data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/features/1.jpg" alt="img">    
                            </div>
                        </div>
                     
                    </div> 
                    
                </div>
            </section>
            <!-- about-area-end -->
            
          
            
             <!-- brand-area -->
            <div class="brand-area pt-30 pb-30 my-5" style="background: #2f3932;">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-3">
                            <div class="single-brand">
                                <a href="/tablets-capsules"><img src="img/brand/1.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="single-brand">
                                     <a href="/ayurvedic-herbal"><img src="img/brand/2.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="single-brand">
                                  <a href="/cardiac-diabetic"> <img src="img/brand/3.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="single-brand">
                                    <a href="/derma">  <img src="img/brand/5.jpg" alt="img"></a>
                            </div>
                        </div>
                         <div class="col-xl-3">
                            <div class="single-brand">
                                    <a href="/syrupsuspensiondrops"> <img src="img/brand/4.jpg" alt="img"></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
            
               <!-- about-area -->
            <section id="about2" class="about-area about-p pt-20 pb-20 p-relative my-5" style="background: url(img/bg/about-bg.png) no-repeat; background-position: right bottom;">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                            <div class="s-about-img p-relative  wow fadeInLeft  animated"   data-animation="fadeInLeft" data-delay=".4s">
                                 <img src="img/features/34.jpg" alt="img">   
                            </div>
                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                  
                                      <h3>What makes us Best for PCD Pharma Franchise?</h3> 
                                   
                                </div>
                                
                                <p>At Aeryn Lifesciences, we stand out as the ideal choice for a PCD Pharma Franchise opportunity due to several key factors. Firstly, our unwavering commitment to quality ensures that our pharmaceutical products are safe, effective, and of the highest standard. This commitment is evident in our state-of-the-art manufacturing facilities and stringent quality control measures.</p>
                                <p> Secondly, our extensive product portfolio covers a wide range of therapeutic segments, offering our partners a diverse selection of products to meet the needs of their customers. This comprehensive offering allows our partners to fulfill to a broader market and enhance their profitability</p>
                               <p>Additionally, we provide our partners with comprehensive marketing support, including promotional materials and strategies. Our commitment to customer satisfaction, coupled with our competitive pricing and timely delivery, makes us the preferred choice for those seeking a rewarding and successful PCD Pharma Franchise opportunity. </p>
                      
                            </div>
                        </div>
                     
                    </div>
                    
                </div>
            </section>
            <!-- about-area-end -->
            
            
            <!--Product Slider-->
<!--            <div class="container my-5">-->
<!--                <h1 class="text-center my-2 p-3" style="font-size:33px;color:#df1d35">Our Products</h1>-->
<!--                   <div class="slider" id="slider">-->
<!--  <div class="slide" id="slide" style="height:inherit;">-->
<!--    <img class="item" src="{{asset('Products/prod1.jpg')}}" style="width:250px;">-->
<!--    <img class="item" src="{{asset('Products/prod2.jpg')}}" style="width:250px;">-->
<!--    <img class="item" src="{{asset('Products/prod3.jpg')}}" style="width:250px;">-->
<!--    <img class="item" src="{{asset('Products/prod4.jpg')}}" style="width:250px;">-->
<!--    <img class="item" src="{{asset('Products/prod5.jpg')}}" style="width:250px;">-->
<!--    <img class="item" src="{{asset('Products/prod6.jpg')}}" style="width:250px;">-->
<!--    <img class="item" src="{{asset('Products/prod7.jpg')}}" style="width:250px;">-->
<!--    <img class="item" src="{{asset('Products/prod8.jpg')}}" style="width:250px;">-->
<!--    <img class="item" src="{{asset('Products/prod9.jpg')}}" style="width:250px;">-->
<!--    <img class="item" src="{{asset('Products/prod10.jpg')}}" style="width:250px;">-->
    
<!--  </div>-->
<!--  <button class="ctrl-btn pro-prev">Prev</button>-->
<!--  <button class="ctrl-btn pro-next">Next</button>-->
<!--</div>-->
<!--            </div>-->

<!-- Brand Area -->
<div class="brand-area pt-30 pb-30 my-3" style="background: #fff;text-align:center;">
    <div class="container">
     <h5 style="font-size:35px;font-family: 'Roboto', sans-serif;" class="my-3">Our Products</h5>
        <div class="row brand-active">
            <div class="col-xl-3">
                <div class="single-brand">
                    <img src="{{asset('Products/prod1.jpg')}}" alt="img" style="height: 250px;width: 250px;">
                </div>
            </div>
            <div class="col-xl-3">
                <div class="single-brand">
                    <img src="{{asset('Products/prod2.jpg')}}" alt="img" style="height: 250px;width: 250px;">
                </div>
            </div>
            <div class="col-xl-3">
                <div class="single-brand">
                    <img src="{{asset('Products/prod3.jpg')}}" alt="img" style="height: 250px;width: 250px;">
                </div>
            </div>
            <div class="col-xl-3">
                <div class="single-brand">
                    <img src="{{asset('Products/prod4.jpg')}}" alt="img" style="height: 250px;width: 250px;">
                </div>
            </div>
            <div class="col-xl-3">
                <div class="single-brand">
                    <img src="{{asset('Products/prod5.jpg')}}" alt="img" style="height: 250px;width: 250px;">
                </div>
            </div>
        </div>
    </div>
</div>

         
           
            
             <!-- testimonial-area -->
            <section class="testimonial-area pt-20 pb-20" style="background: #f4f7fe;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                <h5 style="font-size:32px;font-family: 'Roboto', sans-serif;">Testimonials</h5>
                                <h2 style="font-family: 'Roboto', sans-serif;">
                                  What Our Clients Says
                                </h2>
                              
                            </div>
                           
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="testimonial-active">
                                <div class="single-testimonial">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5"> 
                                           <div class="test-img"><img src="img/testimonial/1.png" alt="img"></div> 
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                         <p>"Working with Aeryn Lifesciences has been a rewarding experience. Their high-quality products and excellent service have helped us build a strong customer base." </p>
                                    <div class="testi-author">
                                       
                                        <div class="ta-info">
                                            <h6>Rohan Sharma</h6>
                                            <span>Business Associate</span>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                   
                                    <div class="qt-img">
                                 
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5"> 
                                           <div class="test-img"><img src="img/testimonial/2.png" alt="img"></div> 
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                         <p>"Aeryn Lifesciences is a reliable partner. Their products are effective, and their support team is always there to assist us." </p>
                                    <div class="testi-author">
                                       
                                        <div class="ta-info">
                                            <h6>Gourav Thakur</h6>
                                            <span> Franchise Partner</span>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                   
                                    <div class="qt-img">
                                 
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5"> 
                                           <div class="test-img"><img src="img/testimonial/3.png" alt="img"></div> 
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                         <p>"We have been associated with Aeryn Lifesciences for years, and they have consistently delivered top-notch products. Highly recommended!" </p>
                                    <div class="testi-author">
                                       
                                        <div class="ta-info">
                                            <h6>Parth Sharma</h6>
                                            <span>Healthcare Professional
</span>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                   
                                    <div class="qt-img">
                                    
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5"> 
                                           <div class="test-img"><img src="img/testimonial/4.png" alt="img"></div> 
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                         <p>"Aeryn Lifesciences has helped us expand our business with their wide range of products. Their commitment to quality is unmatched." </p>
                                    <div class="testi-author">
                                       
                                        <div class="ta-info">
                                            <h6>Akash Chopra</h6>
                                            <span>Distributor</span>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                   
                                    <div class="qt-img">
                                    
                                    </div>
                                </div>
                                  <div class="single-testimonial">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5"> 
                                           <div class="test-img"><img src="img/testimonial/5.png" alt="img"></div> 
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                         <p>"The support we receive from Aeryn Lifesciences is exceptional. They are always available to address our queries and concerns."</p>
                                    <div class="testi-author">
                                       
                                        <div class="ta-info">
                                            <h6>Sanjay Rawat </h6>
                                            <span>Doctor</span>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                   
                                   
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
            
            <!-- faq-area -->
            <section id="faq" class="faq-area pt-120 pb-100" style="background: url(img/bg/about-bg.png) no-repeat; background-position: left bottom;"">             
                <div class="container">   
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="about-title second-atitle mb-30">            
                                    <h5 style="font-family: 'Roboto', sans-serif;">FAQ</h5>                      
                                    <h2 style="font-family: 'Roboto', sans-serif;">Frequently Asked Quesions</h2>
                                </div>
                            <div class="faq-wrap">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                 What is a PCD Pharma Franchise?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                            <div class="card-body text-dark" style="color:black!important">
                                                A PCD Pharma Franchise is a business model where a pharmaceutical company grants distribution and marketing rights to individuals or entities for a particular geographical area to sell its products under their brand name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="faq-btn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                  How does a PCD Pharma Franchise work?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                                            <div class="card-body text-dark" style="color:black!important">
                                                Under a PCD Pharma Franchise, the company provides products, marketing materials, and support to the franchise partner, who in turn sells the products in their designated area, earning a commission or margin on sales.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                   What are the requirements to start a PCD Pharma Franchise?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                                            <div class="card-body text-dark" style="color:black!important">
                                                To start a PCD Pharma Franchise, one needs a valid drug license, GST registration, sufficient investment capital for initial stock purchase, and a willingness to adhere to the terms and conditions set by the franchisor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    What are the advantages of opting for a PCD Pharma Franchise Business?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                            <div class="card-body text-dark" style="color:black!important;">
                                                Advantages include low investment requirements, access to established product range, marketing support, monopoly rights in the designated area, and the potential for high-profit margins.
                                            </div>
                                        </div>
                                    </div>
                                    
                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                     <img src="img/bg/faq-bg.jpg" style="height:550px;"></img>
                        </div>
                      
                        
                    </div>
                </div>
            </section>
            <!-- team-area-end -->  
            
            
          
            
         
        </main>
        <!-- main-area-end -->
@endsection