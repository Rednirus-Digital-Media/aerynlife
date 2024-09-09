@extends('layouts.app')
@section('meta_title',$category->name)
@section('meta_keywords',$category->name)
@section('meta_description',$category->name)
@section('meta_image')
@if($category->image)
content="{{ Request::root() }}/storage/{{$category->image}}"
@else
content="{{ Request::root() }}/images/logo-2.png"
@endif
@endsection
@section('content')
<style>
   .sidebar-cat {
    background: #322f6a42;
    border-radius: 5px;
    margin-bottom: 26px;
    width: 330px;
}
button.btn.btn-primary.w-100.py-3 {
    font-size: 19px !important;
    background: #275070;
}
.kopty a:hover {
    color:white;
}
.sidebar-cat ul li {
    border-bottom: 1px solid #fff;
    padding: 5px 10px;
}

h4.catr {
         background: #275071;
    color: #fff;
    padding: 4px 10px;
    border-radius: 5px;
}
.list-group ul :hover {
    padding: 4px;
    background: #f22f37;
}
.sidebar-cat .active {
    background: #322f6a66;
    color: #fff;
    padding: 8px 10px;
}
.sidebar-cat a {
    color: #000;
    font-weight: bold;
    padding: 5px 10px;
  
    text-decoration: auto;
}
.form-groups {
    background: #cac9d8;
}
.form-groups form {
    padding: 20px;
}
.form-groups input {
    margin-bottom: 17px;
        border: 1px solid #275070;
}
textarea.form-control {
    min-height: calc(1.5em + 0.75rem + calc(var(--bs-border-width) * 2));
   border: 1px solid #275070;
}
/*.harry img {
    width: 4501px;
    height: 348px;
}*/

.harry {
    background: url(images/bredcrumb.jpg);
    background-repeat: no-repeat;
  background-position: center;
  padding-left: 70px;
  background-size: cover;
  height: 100px;
  padding-bottom: 71px;
}
h4.catr {
   
    color: #fff;
    padding: 4px 10px;
    border-radius: 5px;
    text-align: center;
}

.cohrew a:hover {
    color: black;
}

.sidebar-cat a {
    color: #000;
    font-weight: bold;
    padding: 5px 10px;
    text-decoration: auto;
    font-size: 15px;
}
.bg_image{
   background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/breadcrumb_ff.jpg');
    background-size: cover;
    height:172px;
}
a {
    color: #0d0e0e;
    text-decoration: none;
    background-color: transparent;
}
h4.catr {
    background: #fb1010c4;
}
button.btn.btn-primary.w-100.py-3 {
    font-size: 19px !important;
    background: #fb1010c4;
}
</style>

<!--<div class="harry">-->
<!--<img src="images/bredcrumb.jpg">-->
<!--</div>-->


<div class="ui-title-page bg_image bg_transparent">
    <div class="container">
      <div class="row">
        <div class="small-container">-->
        <div class="row justify-content-center">
            <div class="col-xxl-12">
                <div>
                   <h2 class="text-white"  style="position:relative;top:6px;right: -31px;text-transform:uppercase">{{$category->name}}</h2>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>





<br><br>

<section class=" pb-80">
   <div class="container">
          <div class="kopty">
      <div class="row">
          
         
         <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="sidebar-cat">
               <h4 class="catr"> PRODUCT CATEGORY</h4>
               <div class="list-group">
                   <ul>
                                              <li><a href="/tablets-capsules">TABLETS AND CAPSULES</a></li>
                                              <li><a href="/softgel-capsules">SOFTGEL CAPSULES</a></li>
                                                   <li><a href="/derma">DERMA</a></li>
                                                    <li><a href="/sachet">SACHET</a></li>
                                                     <li><a href="/ayurvedic-herbal">AYURVEDIC HERBAL</a></li>
                                                     <li><a href="/injection">INJECTION</a></li>
                                                     <li><a href="/geldentaleyeearnasal">GEL/DENTAL/EYE/EAR/NASAL</a></li>
                                                     <li><a href="/syrupsuspensiondrops">SYRUP/SUSPENSION&DROPS</a></li>
                                                     <li><a href="/cardiac-diabetic">CARDIAC AND DIABETIC</a></li>
                                                      <li><a href="/health-care-products">HEALTH AND PRODUCTS</a></li>
                                                      <li><a href="/ortho-product-range">ORTHO PRODUCT RANGE</a></li>
                                                      <li><a href="/pediatric-product-range">PEDIATRIC PRODUCT RANGE</a></li>
                                                      <li><a href="/gynae-product-range">GYNAE PRODUCT RANGE</a></li>
                              </ul>
                 
                  
                  
               </div>
            </div>
         
            
          
            
            <div class="sidebar-cat">
              <div class="form-groups">
            <h4 class="catr">Enquiry Now</h4>
            
            <form class="row" method="POST" action="/enquiry/store" siq_id="autopick_9348">
    @csrf
    <div id="formmessage"></div>
    <div class="form-group col-md-6">
        <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required">
    </div>
    <div class="form-group col-md-6">
        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required">
    </div>
    <div class="form-group col-md-6">
        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required">
    </div>
    <div class="form-group col-md-6">
        <input id="form_city" type="text" name="city" class="form-control" placeholder="City" required="required">
    </div>
    <!-- Uncomment the following code if you want to include a select field -->
    <!-- <div class="form-group col-md-6">
        <select name="about" class="form-select form-control">
            <option>Choose Service</option>
            <option>PCD Pharma Franchise</option>
            <option>Third Party Manufacturing</option>
        </select>
    </div> -->
    <div class="form-group col-md-12">
        <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="3" required="required"></textarea>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
    </div>
</form>

            <!--<form class="row" method="post" action="/enquiry/store" siq_id="autopick_9348">-->
            <!--     @csrf-->
            <!--    <input type="hidden" name="_token" value="jjLTFyhiuf8KhVJnn0OmcrASssME2ISffpeQsg8y">                  <div id="formmessage"></div>-->
            <!--      <div class="form-group col-md-6">-->
            <!--        <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required">-->
            <!--      </div>-->
            <!--      <div class="form-group col-md-6">-->
            <!--        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required">-->
            <!--      </div>-->
            <!--      <div class="form-group col-md-6">-->
            <!--        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required">-->
            <!--      </div>-->
            <!--          <div class="form-group col-md-6">-->
            <!--        <input id="form_city" type="tel" name="city" class="form-control" placeholder="City" required="required">-->
            <!--      </div>-->
                  <!--<div class="form-group col-md-6">-->
                  <!--  <select name="about" class="form-select form-control">-->
                  <!--    <option>Choose Service</option>-->
                  <!--    <option>PCD Pharma Franchise</option>-->
                  <!--    <option>Third Party Manufacturing</option>-->
                      
                  <!--  </select>-->
                  <!--</div>-->
            <!--      <div class="form-group col-md-12">-->
            <!--        <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="3" required="required"></textarea>-->
            <!--      </div>-->
                  
            <!--           <div class="col-12">-->
            <!--                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>-->
            <!--                </div>-->
                                 
                                 
               
            <!--    </form>-->
           </div>
            </div>
            
            
        
            
        
            
         </div>
         <div class="col-lg-8 col-md-12">
              <div class="cohrew">
         <div class="table-responsives">
               <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
                  <thead>
                  <tr>
                                       
                                         <th>Sr</th>
                                       <th>Image</th>
                                       
                                       <th>Name</th>
                                       <th>Composition</th>
                                        
                                       <th>Packing</th>
                                   </tr>
                  </thead>
                  <tbody>
                  <?php $x= 1 ?>
                                     @foreach ($products->sortBy('name') as $item)
                                        <tr>
                                             <td>{{$x++ }}</td>
                                              <td>@if($item->image)
                                              <a href="/{{ $item->slug }}" target="_blank"><img src="/{{$item->image}}" width="100px"></a>
                                            
                                              @else
                                              <img src="/img/com12.jpg" width="100px" height="50px">
                                              
                                              @endif</td>
                                            
                                            <td><a href="/{{ $item->slug }}">{{ $item->name }}</a></td>
                                            <td><a href="/{{ $item->slug }}">{{ $item->composition }}</a></td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="description">
               <p> <?php
                  echo html_entity_decode($category->description);
                  ?></p>
            </div>
         </div>
      </div>    </div>
   </div>   </div>
</section>
@endsection