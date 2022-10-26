@section('title', 'Stella Golf')
@extends('app')
@section('content')

<div class="productDetail">
    <div class="productDetail__img">
        <img src="{{ asset("images/jacket.webp") }}" alt="">
    </div>
    <div class="productDetail__info">
        <h5 class="productDetail__title">
            <a>CELLO JACKET</a>
        </h5>
        <span class="productDetail__price">
            <span class="money">¥20,000</span>
        </span>
    </div>

</div>

<button type="button" onClick="history.back()">戻る</button>

@endsection
