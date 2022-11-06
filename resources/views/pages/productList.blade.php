@section('title', 'Stella Golf')
@extends('app')
@section('content')

<div class="products">
    <div class="mx-auto" style="max-width:1200px">
        <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">
            {{ $currentPage }} Item
        </h1>
    </div>

    <div class="product_contents">
        @foreach ($products as $product)
        <div class="product_item">
            <h5 class="product_item_title">
                <a>{{ $product->name }}</a>
            </h5>
            <span class="product_item_price">
                <span class="money">¥{{ $product->price }}</span>
            </span>
            <a href="{{ route('productDetail') }}">
                <div class="product_item_img">
                <img src="{{ asset("images/images.jpg") }}" alt="">
        </div>
            </a>
    </div>
    @endforeach
    </div>
</div>

@endsection
