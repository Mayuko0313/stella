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
        <div class="productDetail__price">
            <span class="money">¥20,000</span>
        </div>

        <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">S</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">M</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            <label class="form-check-label" for="inlineRadio3">L</label>
        </div>
        </div>
        
        <button tipe="button" class="productDetail__cart">
            <h5>ADD TO CART</h5>
        </button>

    </div>
</div>

<button type="button" onClick="history.back()">戻る</button>

@endsection
