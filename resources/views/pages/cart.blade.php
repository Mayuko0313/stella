@section('title', 'Stella Golf')
@extends('app')
@section('content')


<div class="cart" style="margin: 100px 0">
    <div class="cart__maintitle">
    <h2>カート</h2>
    </div>
    @if ($products)
        @foreach ($products as $product)
          <div class="cart__item" style="margin-bottom: 30px">
              <div class="cart__img">
                <img src="{{ asset($product['img']) }}" alt="">
              </div>
              <div class="cart__info">
                <h5 class="cart__title">
                    <p>{{ $product['name'] }}</p>
                </h5>
              <div class="cart__price">
                <span class="money">¥{{ $product['price'] }}</span>
              </div>
              <div class="cart_size">
                <span class="size">サイズ: {{ $product['size'] }}</span>
              </div>
              <div class="cart__number">
                <div class="product-quantity">
                  <span class="number">数量:</span>
                  <input type="number" value="2" min="1">
                </div>
              </div>


            <td>
                <form action="cart.php" method="post">
                <input type="hidden" name="delete_name" value="">
                <button type="button" class="btn btn-red">削除</button>
            </form>
            </td>


          </div>
      </div>
    @endforeach
@endif
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
