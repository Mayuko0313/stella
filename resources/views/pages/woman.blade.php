@section('title', 'Stella Golf')
@extends('app')
@section('content')

<div class="woman">
   <div class="woman-contents">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">Woman Item</h1>
       </div>

       <div class="product_item">
            <div class="navbar_product_img" href="#"></div>
            <img src="{{ asset("images/skirt1.webp") }}" alt="">
       </div>

       <div class="product-item_content_iris">
           <h5 class="product-item_title">
               <a>IRIS SKIRT</a>
           </h5>

        <span class="product_item_proce js-product-item-price">
            <span class="price_amount">
                <span class="money">¥10,000</span>
            </span>
        </span>

       <div class="product_item">
            <div class="navbar_product_img" href="#"></div>
            <img src="{{ asset("images/skirt2.webp") }}" alt="">
       </div>

       <div class="product-item_content_cello">
        <h5 class="product-item_title">
            <a>CELLO SKIRT</a>
        </h5>

        <span class="product_item_proce js-product-item-price">
            <span class="price_amount">
                <span class="money">¥10,000</span>
            </span>
        </span>

           </div>
       </div>
   </div>
</div>

@endsection
