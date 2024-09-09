@extends('layouts.app')
@section('meta_title',$product->meta_title)
@section('meta_keywords',$product->meta_keyword)
@section('meta_description',$product->meta_description)

@section('content')

<style>
.product-image img:hover{
    transform:scale(1.1);
    transition:0.5s;
}

.content h2 {
     font-size: 19px;
    font-family: 'Poppins';
    font-weight: 500;
    border-bottom: 2px solid #fff;
    padding-left: 3px;
    padding-bottom: 12px;
    margin-bottom: 12px;
    line-height: 27px;
    
}
.content h5 {
     font-size: 19px;
    font-family: 'Poppins';
    font-weight: 500;
    border-bottom: 2px solid #fff;
    padding-left: 3px;
    padding-bottom: 12px;
    margin-bottom: 12px;
    line-height: 27px;
    
}

.content {

    padding: 12px;
    
    background: #214866;
}

.content p {
    font-size: 19px;
    font-family: 'Poppins';
    font-weight: 500;
    border-bottom: 2px solid #fff;
    padding-left: 3px;
    padding-bottom: 12px;
    margin-bottom: 12px;
    line-height: 27px;
    text-transform: lowercase;
}


.row.justify-content-center {
    margin-top: 95px;
}

h4.catr {
    margin-right: 67px;
}



.list-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0px;
    margin-bottom: 0;
    margin-right: 68px;
    margin-top: -7px;
}

.product-image {


    margin-right: 42px;
    margin-left: -33px;
}
.content h2 {
    color: white;
}

.content h5 {
    color: white;
}
.content p{
    color: white;
}


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
    color: white;
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

/* Basic CSS styling */
#register-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

.bg_image{
   background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/breadcrumb_ff.jpg');
    background-size: cover;
    height:172px;
}
.row.justify-content-center {
    margin-top: 38px;
}
button.btn.btn-default {
    background-color: #df1d35;
}
.content {
    padding: 12px;
    background: #00000026;
}
#register-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #00000026;
    border-radius: 5px;
    background-color: #00000026;
}
label {
    color: black;
    cursor: pointer;
    font-size: 20px;
    font-weight: 400;
}
h2.text-center {
    color: black;
}
.content h5 {
    color: white;
 
}
.content h2 {
    color:white;
}


</style>


    


<div class="ui-title-page bg_image bg_transparent">
    <div class="container">
      <div class="row">
        <div class="small-container">-->
        <div class="row justify-content-center">
            <div class="col-xxl-12">
                <div>
                   <h2 class="text-white" style="position:relative;top:47px;right: -24px;">{{$product->name}}</h2>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>



      
      

  <div class="container">
   <div class="row justify-content-center">
       
      <div class="col-md-12">
         <div class="row">
            
              
            <div class="col-lg-12 col-md-12">
               <div class="row">
                 <div class="col-lg-4">
                  <div class="product-image">
                   @if($product->image)
                     <img src="/{{$product->image}}" alt="{{$product->name}}" style="    height: 320px;
    width: 378px;
">
                        @else<img src="/img/com12.jpg"  alt="{{$product->name}}">@endif
                   </div>
                  </div>
                 <div class="col-lg-4">
                   <div class="content" style="background-image: linear-gradient(to right, #df1c34, #4d5760) !important;">
                    <h2><b style="color:#edff00!important;">BRAND NAME : </b><span >{{$product->name}}</span> </h2>
                     <h5><b style="color:#edff00!important;">PACKING : </b><span >{{$product->packing}}</span> </h5>
                 
                   <h2><b style="color:#edff00!important;">COMPOSITION : </b><span>{{$product->composition}}</span> </h2>
                   <!--<h4>Related Products:</h4>-->
                   
                   <!--<div class="styiuui" style="margin-left: 37px; animation: pulse 1s infinite ease-in-out alternate;">-->
<!--<button type="button1" class="btn btn-primary1" data-toggle="modal" data-target="#exampleModal">Enquiry About {{$product->name}}-->
<!--</button></div>-->
                 
                     </div>
                   
                 </div>
                 <div class="col-lg-4">
<div id="register-form">
    <h2 class="text-center">SEND ENQUIRY</h2>
    <p class="text-center mt-1 mb-2 text-danger"><b> ( DO NOT POST JOB ENQUIRY )</b></p>
    <form action="/enquiry/store" method="POST">
        @csrf
        <div class="row">
        <div class="form-group col-md-6">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        
        <div class="form-group col-md-6">
            <label for="phone">Phone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
       
        <div class="form-group col-md-6">
            <label for="about">About:</label>
            <input type="text" class="form-control" id="about" name="about" value="{{$product->name}}" required>
        </div>
        <div class="form-group col-md-6">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="state" required>
        </div>
       
        <div class="form-group col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="form-group col-md-12">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="2" placeholder="Write Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
</div>
    </form>
    </div>
</div>
               
            </div>
         </div>
      </div>
   </div>
</div>
</div>

<br>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elementsToCapitalize = document.querySelectorAll('#capitalize');

        elementsToCapitalize.forEach(function(element) {
            var text = element.textContent;
            element.textContent = capitalizeFirstLetter(text);
        });
    });

    function capitalizeFirstLetter(str) {
        return str.charAt(0).toUpperCase() + str.slice(1).toLowerCase();
    }
</script>

@endsection
