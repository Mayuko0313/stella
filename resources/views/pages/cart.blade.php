@section('title', 'Stella Golf')
@extends('app')
@section('content')


<div class="cart">
    <div class="cart__maintitle">
    <h2>カート</h2>
    </div>
    <div class="cart__item">
        <div class="cart__img">
            <img src="{{ asset("images/jacket.webp") }}" alt="">
        </div>
        <div class="cart__info">
            <h5 class="cart__title">
                <p>CELLO JACKET</p>
            </h5>
            <div class="cart__price">
                <span class="money">¥20,000</span>
            </div>
            <div class="cart_size">
                <span class="size">サイズ:S</span>
            </div>
            <div class="cart__number">
                <span class="number">数量:1</span>
        </div>
    </div>
</div>

    <div class="cart__item">
        <div class="cart__img">
            <img src="{{ asset("images/vest.webp") }}" alt="">
        </div>
        <div class="cart__info">
            <h5 class="cart__title">
                <p>ROTIE PILE TOP</p>
            </h5>
            <div class="cart__price">
                <span class="money">¥10,000</span>
            </div>
            <div class="cart_size">
                <span class="size">サイズ:S</span>
            </div>
            <div class="cart__number">
                <span class="number">数量:1</span>
            </div>
        </div>
    </div>

    <div class="cart__login__button">
        <a href="{{ route('login') }}">
            <div class="register">
                <h5 class="login__member__button">ログイン/会員登録してレジへ進む</h5>
            </div>
        </a>

        <a href="{{ route('buyProcess') }}">
            <div class="register">
                <h5 class="login__register">ログインせずにレジへ進む</h5>
            </div>
        </a>
        
    </div>
</div>



<button type="button" onClick="history.back()">戻る</button>
@endsection
