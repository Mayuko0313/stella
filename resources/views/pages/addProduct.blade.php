@section('title', 'Stella Golf')
@extends('appOwner')
@section('owner__content')

@if (session('flash_message'))
    <div class="alert alert-success">
        {{ session('flash_message') }}
    </div>
@endif

<div class="add__product">
    <form
      action="{{ route('addPost') }}"
      method="post"
      name="addPost"
      class="add-product_form"
      enctype="multipart/form-data"
    >

        @csrf
        <div class="col-sm-6 mt-3">
          <label for="file" class="form-label">
            商品画像
          </label>
          <div id="file" class="input-group">
            <div class="custom-file">
              <input type="file" id="customfile" class="custom-file-input" name="customfile" multiple />
              <label class="custom-file-label" for="customfile" data-browse="参照">ファイル選択...</label>
            </div>
            <div class="input-group-append">
              <button type="button" class="btn btn-outline-secondary reset">取消</button>
            </div>
          </div>
        </div>

        <div class="col-sm-6 mt-3">
          <label for="product_name" class="form-label">商品名</label>
          <input
            type="text"
            name="product_name"
            class="form-control @error('product_name') is-invalid @enderror"
            id="product_name"
            value="{{ old('product_name') }}"
            autocomplete="product_name"
            autofocus
          >
          @error('product_name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="col-sm-6 mt-3">
          <label for="product_sex" class="form-label">Woman or Mens</label>
          <select
            id="product_sex"
            class="form-select add-product_select"
            name="product_sex"
          >
            <option
              selected
              value="1"
              {{ old('product_sex') == 1 ? 'selected' : '' }}
            >
              Woman
            </option>
            <option
              value="2"
              {{ old('product_sex') == 2 ? 'selected' : '' }}
            >
              Mens
            </option>
          </select>
        </div>

        <div class="col-sm-6 mt-3">
          <label for="product_type" class="form-label">商品種別</label>
          <select
            id="product_type"
            class="form-select add-product_select"
            name="product_type"
          >
            <option
              selected
              value="1"
              {{ old('product_type') == 1 ? 'selected' : '' }}
            >
              Outer
            </option>
            <option
              value="2"
              {{ old('product_type') == 2 ? 'selected' : '' }}
            >
              Tops
            </option>
            <option
              value="3"
              {{ old('product_type') == 3 ? 'selected' : '' }}
            >
              Dress
            </option>
            <option
              value="4"
              {{ old('product_type') == 4 ? 'selected' : '' }}
            >
              Pants
            </option>
            <option
              value="5"
              {{ old('product_type') == 5 ? 'selected' : '' }}
            >
              Skirt
            </option>
          </select>
        </div>

        <div class="col-sm-6 mt-3">
          <label for="product_price" class="form-label">金額</label>
          <input
            type="text"
            class="form-control @error('product_price') is-invalid @enderror"
            id="product_price"
            name="product_price"
            placeholder="¥"
            value="{{ old('product_price') }}"
            autocomplete="product_price"
            autofocus
          >
          @error('product_price')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="col-sm-6 mt-3">
          <button type="submit" class="btn btn-primary">商品追加</button>
        </div>


    </form>
</div>

@endsection
