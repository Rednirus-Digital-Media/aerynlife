@extends('layouts.app')
@section('meta_title','Contact Details of Medmom Pharma | Best Pharma Company in India ')
@section('meta_keywords','')
@section('meta_description','If you have any query regarding our pharma products or PCD franchise business then call us at 09878809952 or email at :medmompharma@gmail.com at any time. ')

   
@section('content')



<style>



    html, body{
  margin: 0;
  padding: 0;
  text-align: center;
  font-family: sans-serif;
 
}

h1, a{
  margin: 0;
  padding: 0;
  text-decoration: none;
}

.section{
  padding: 4rem 2rem;
}

.section .error{
  font-size: 150px;
  color: #008B62;
  text-shadow: 
    1px 1px 1px #00593E,    
    2px 2px 1px #00593E,
    3px 3px 1px #00593E,
    4px 4px 1px #00593E,
    5px 5px 1px #00593E,
    6px 6px 1px #00593E,
    7px 7px 1px #00593E,
    8px 8px 1px #00593E,
    25px 25px 8px rgba(0,0,0, 0.2);
}

.page{
  margin: 2rem 0;
  font-size: 20px;
  font-weight: 600;
  color: #444;
}

.back-home{
  display: inline-block;
  border: 2px solid #222;
  color: #222;
  text-transform: uppercase;
  font-weight: 600;
  padding: 0.75rem 1rem 0.6rem;
  transition: all 0.2s linear;
  box-shadow: 0 3px 8px rgba(0,0,0, 0.3);
}
.back-home:hover{
  background: #222;
  color: #ddd;
}
</style>

        
	
<div class="section">
   <img src="/assets/imgs/404-page-animation-example.gif">
  <div class="page"></div>
  <a class="back-home" href="/">Back to home</a>
</div>
  @endsection   