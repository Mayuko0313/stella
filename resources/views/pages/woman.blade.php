@section('title', 'Stella Golf')
@extends('app')
@section('content')

<div class="woman">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">Woman Item</h1>
       </div>

       <div class="woman-contents">

       <div class="product-item">
        <h5 class="product-item_title">
            <a>IRIS SKIRT</a>
        </h5>
        <span class="product-item_price">
            <span class="money">¥10,000</span>
        </span>
            <div class="product-item_img" href="#">
            <img src="{{ asset("images/skirt1.webp") }}" alt="">
       </div>
       </div>


       <div class="product-item">
        <h5 class="product-item_title">
            <a>CELLO SKIRT</a>
        </h5>
        <span class="price_amount">
            <span class="money">¥10,000</span>
        </span>
            <div class="navbar_product_img" href="#">
            <img src="{{ asset("images/skirt2.webp") }}" alt="">
       </div>
       </div>


       </div>
   </div>
</div>

@endsection
