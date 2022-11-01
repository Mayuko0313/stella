@section('title', 'Stella Golf')
@extends('appOwner')
@section('owner__content')

<div class="add__product">
    <form class="row g-3">
        @csrf
        <div class="add__product__img">
            <img src="{{ asset("images/jacket.webp") }}" alt="">
        </div>
        
        <div class="col-sm-6">
          <label for="productname" class="form-label">商品名</label>
          <input type="text" class="form-control" id="product-name">
        </div>

        <div class="col-sm-6">
          <label for="inputState" class="form-label">Woman or Mens</label>
        </div>

        <div class="col-sm-6">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>Woman</option>
              <option>Mens</option>
            </select>
        </div>

        <div class="col-sm-6">
          <label for="inputPassword4" class="form-label">商品種別</label>
        </div>

        <div class="col-sm-6">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>Outer</option>
              <option>Tops</option>
              <option>Dress</option>
              <option>Pants</option>
              <option>Skirt</option>
            </select>
        </div>

        <div class="col-sm-6">
          <label for="inputAddress" class="form-label">金額</label>
          <input type="text" class="form-control" id="product-name" placeholder="¥">
        </div>

        <div class="col-sm-6">
          <button type="submit" class="btn btn-primary">商品追加</button>
        </div>

    </form>
</div>

@endsection
