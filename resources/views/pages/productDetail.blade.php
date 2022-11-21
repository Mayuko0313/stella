@section('title', 'Stella Golf')
@extends('app')
@section('content')

@if (session('flash_message'))
    <div class="alert alert-success">
        {{ session('flash_message') }}
    </div>
@endif

<form action="{{ route('addCart')}}" method="POST">
    @csrf

    <div class="productDetail">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <div class="productDetail__img">
            <img src="{{ asset($product->productImg) }}" alt="">
        </div>
        <div class="productDetail__info">
            <h5 class="productDetail__title">
                <p>{{ $product->name }}</p>
            </h5>
            <div class="productDetail__price">
                <span class="money">¥ {{ $product->price }}</span>
            </div>

            <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size_id" id="inlineRadio1" value="1" checked>
                <label class="form-check-label" for="inlineRadio1">S</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size_id" id="inlineRadio2" value="2">
                <label class="form-check-label" for="inlineRadio2">M</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size_id" id="inlineRadio3" value="3">
                <label class="form-check-label" for="inlineRadio3">L</label>
            </div>
            </div>

            <button tipe="button" class="productDetail__cart">
                <h5>ADD TO CART</h5>
            </button>

        </div>
    </div>
</form>

<button type="button" onClick="history.back()">戻る</button>

@endsection
