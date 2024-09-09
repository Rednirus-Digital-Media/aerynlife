@extends('layouts.app')
@section('content')

@php
    // Fetch 10 categories from the database
    $categories = \App\Models\Category::take(13)->get();
  
    // Reorder categories
  $category1 = $categories->splice(7, 1)->first();
    $categories->splice(0, 0, [$category1]);
    
      $category2 = $categories->splice(3, 1)->first();
    $categories->splice(1, 0, [$category2]);



  
@endphp

@php 
    // Fetch all products from the database and sort them alphabetically by name
    $products = \App\Models\Product::orderBy('name')->get();
    $productCount = 1;
@endphp



<style>


.prod_list:hover{
    background-color:#ef2d30;
    transition:0.5s;
}

.prod_list:hover a {
    color: white !important;
}

.prod_list:hover td {
    color: white !important;
}


    .list-categories__name.active {
        background-color: #c52f31;
        color: white;
    }

    .icon-link {
        display: block;
        transition: transform 0.3s ease-in-out;
    }

    .icon-link:hover {
        transform: scale(1.1);
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
</style>

<div class="ui-title-page bg_image bg_transparent">
    <div class="container">
      <div class="row">
        <div class="small-container">-->
        <div class="row justify-content-center">
            <div class="col-xxl-12">
                <div>
                   <h2 class="text-white" id="capitalize" style="position:relative;top:6px;right: -31px;text-transform:capitalize!important;">Product List</h2>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>

<div class="container pt-5 my-5">
    <div class="row">
        <div class="col-lg-12 col-md-12" style="margin-top:25px;">
            <div class="table-responsives">
                <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
                    
                    <tbody>
                        
              @foreach($categories as $category)
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead>
            <tr>
                <th colspan="5" style="background-color: #ef2d30; color: white; text-align: center; padding: 10px;">
                    {{ $category->name }}
                </th>
            </tr>
            <tr>
                <th style="padding: 10px;font-weight:bold;">Sr</th>
                <th style="padding: 10px;font-weight:bold;">Image</th>
                <th style="padding: 10px;font-weight:bold;">Name</th>
                <th style="padding: 10px;font-weight:bold;">Composition</th>
                <th style="padding: 10px;font-weight:bold;">Packing</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category->products as $product)
                <tr class="prod_list">
                    <td style="padding: 10px;">{{ $productCount++ }}</td>
                    <td style="padding: 10px;">
                        @if($product->image)
                            <a href="{{ url('/'.$product->slug) }}">
                                <img src="/{{$product->image}}" width="100px" loading="lazy" style="width:75px;height:75px;">
                            </a>
                        @else
                            <img src="/img/com12.jpg" width="100px" loading="lazy" style="width:75px;height:75px;">
                        @endif
                    </td>
                    <td style="padding: 10px;">
                        <a href="{{ url('/'.$product->slug) }}" class="capitalize"  target="_blank" style="color:black;text-decoration:none;font-family: 'DM Sans', sans-serif;">{{$product->name}}</a>
                    </td>
                    <td style="padding: 10px;">
                        <a href="{{ url('/'.$product->slug) }}" class="capitalize"  target="_blank" style="color:black;text-decoration:none;font-family: 'DM Sans', sans-serif;">{{$product->composition}}</a>
                    </td>
                    <td style="padding: 10px;">
                        <a href="{{ url('/'.$product->slug) }}" class="capitalize"  target="_blank" style="color:black;text-decoration:none;font-family: 'DM Sans', sans-serif;">{{$product->packing}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endforeach





                        <!--@foreach($products as $product)-->
                        <!--<tr>-->
                        <!--    <td>{{ $productCount++}}</td>-->
                        <!--    <td>-->
                        <!--         @if($product->image)-->
                        <!--         <a href="{{ url('/'.$product->slug) }}">-->
                        <!--             <img src="/{{$product->image}}" width="100px" loading="lazy" style="width:130px;height:130px;">-->
                        <!--        @else<img src="/assets/img/comingsoon.png" width="100px" loading="lazy" style="width:130px;height:130px;">-->
                        <!--        @endif-->
                        <!--         </a>-->
                                
                        <!--    </td>-->
                        <!--    <td><a href="{{ url('/'.$product->slug) }}" target="_blank" style="color:black!important;text-decoration:none;font-family: 'DM Sans', sans-serif;">{{$product->name}}</a></td>-->
                        <!--    <td><a href="{{ url('/'.$product->slug) }}" target="_blank" style="color:black!important;text-decoration:none;font-family: 'DM Sans', sans-serif;">{{$product->composition}}</a></td>-->
                        <!--    <td><a href="{{ url('/'.$product->slug) }}" target="_blank" style="color:black!important;text-decoration:none;font-family: 'DM Sans', sans-serif;">{{$product->packing}}</a></td>-->
                        <!--</tr>-->
                        <!--@endforeach-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elementsToCapitalize = document.querySelectorAll('.capitalize');

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
