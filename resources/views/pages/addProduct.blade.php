@section('title', 'Stella Golf')
@extends('appOwner')
@section('owner__content')

<div class="add__product">
    <form
      action="{{ route('addPost') }}"
      method="post"
      name="addPost"
      class="add-product-form"
    >

        @csrf
        <div class="add__product__img">
            <img src="{{ asset("images/jacket.webp") }}" alt="">
        </div>

        <div class="col-sm-6 mt-3">
          <label for="productname" class="form-label">商品名</label>
          <input type="text" class="form-control" id="product-name">
        </div>

        <div class="col-sm-6 mt-3">
          <label for="inputState" class="form-label">Woman or Mens</label>
          <select id="inputState" class="form-select add-product-select">
              <option>Woman</option>
              <option>Mens</option>
            </select>
        </div>

        <div class="col-sm-6 mt-3">
          <label for="inputState" class="form-label">商品種別</label>
          <select id="inputState" class="form-select add-product-select">
              <option selected>Choose...</option>
              <option>Outer</option>
              <option>Tops</option>
              <option>Dress</option>
              <option>Pants</option>
              <option>Skirt</option>
            </select>
        </div>

        <div class="col-sm-6 mt-3">
            <label for="inputState" class="form-label">サイズ</label>
            <select id="inputState" class="form-select add-product-select">
                <option selected>Choose...</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
              </select>
          </div>

        <div class="col-sm-6 mt-3">
          <label for="inputAddress" class="form-label">金額</label>
          <input type="text" class="form-control" id="product-name" placeholder="¥">
        </div>

        <div class="col-sm-6 mt-3">
          <button type="submit" class="btn btn-primary">商品追加</button>
        </div>

    </form>
</div>

@endsection
