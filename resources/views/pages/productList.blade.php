@section('title', 'Stella Golf')
@extends('app')
@section('content')

<div class="products">
    <div class="mx-auto" style="max-width:1200px">
        <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">Mens Item</h1>
    </div>

    <div class="product-contents">

        <div class="product-item">
            <h5 class="product-item_title">
                <a>CELLO JACKET</a>
            </h5>
            <span class="product-item_price">
                <span class="money">¥20,000</span>
            </span>
            <a href="{{ route('productDetail') }}">
                <div class="product-item_img">
                <img src="{{ asset("images/jacket.webp") }}" alt="">
            </div>
            </a>
            </div>

            <div class="product-item">
            <h5 class="product-item_title">
                <a>ROTIE PILE TOP</a>
            </h5>
            <span class="product-item_price">
                <span class="money">¥10,000</span>
            </span>
            <a href="{{ route('productDetail') }}">
                <div class="product-item_img">
                <img src="{{ asset("images/vest.webp") }}" alt="">
           </div>
           </a>
    </div>

    <button type="button" onClick="history.back()">戻る</button>

    </div>
</div>



@endsection
