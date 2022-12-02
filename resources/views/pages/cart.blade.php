@section('title', 'Stella Golf')
@extends('app')
@section('content')


<div class="cart" style="margin: 100px 0">
    <div class="cart__maintitle">
    <h2>カート</h2>
    </div>
    @if ($products)
        @foreach ($products as $index => $product)
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


                <div class="form-check form-check-inline">
                    @if (@$product['size'] === 'S')
                        <input class="form-check-input" type="radio" name='size_id_{{ $index }}' id="inlineRadio1" readonly="readonly" onclick="return false;" value="1" checked>
                    @else
                        <input class="form-check-input" type="radio" name='size_id_{{ $index }}' id="inlineRadio1" readonly="readonly" onclick="return false;" value="1">
                    @endif
                    <label class="form-check-label" for="inlineRadio1">S</label>
                </div>
                <div class="form-check form-check-inline">
                    @if (@$product['size'] === 'M')
                        <input class="form-check-input" type="radio" name='size_id_{{ $index }}' id="inlineRadio1" readonly="readonly" onclick="return false;" value="2" checked>
                    @else
                        <input class="form-check-input" type="radio" name='size_id_{{ $index }}' id="inlineRadio1" readonly="readonly" onclick="return false;" value="2">
                    @endif
                    <label class="form-check-label" for="inlineRadio2">M</label>
                </div>
                <div class="form-check form-check-inline">
                    @if (@$product['size'] === 'L')
                        <input class="form-check-input" type="radio" name='size_id_{{ $index }}' id="inlineRadio1" readonly="readonly" onclick="return false;" value="3" checked>
                    @else
                        <input class="form-check-input" type="radio" name='size_id_{{ $index }}' id="inlineRadio1" readonly="readonly" onclick="return false;" value="3">
                    @endif
                    <label class="form-check-label" for="inlineRadio3">L</label>
                </div>

                    <div class="cart__number">
                        <div class="product-quantity">
                           <span class="number">数量:</span>
                          <input type="number" value='{{ $product["count"] }}' min="1">
                        </div>
                    </div>


                    <td>
                        <form action='{{ route("remove") }}' method="post">
                            @csrf

                            <input type="hidden" name="id" value='{{ $product["id"] }}'>
                            <input type="hidden" name="size_name" value='{{ $product["size"] }}'>
                            <button type="submit" class="btn btn-red">削除</button>
                        </form>
                    </td>

                </div>
                </div>
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
