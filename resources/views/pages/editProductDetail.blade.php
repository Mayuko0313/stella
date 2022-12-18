@section('title', 'Stella Golf')
@extends('appOwner')
@section('owner__content')

{{-- セッションフラッシュメッセージがあったら --}}
@if (session('flash_message'))
    <div class="alert alert-success">
        {{ session('flash_message') }}
    </div>
@endif

<form
    action="{{ route('editProduct', ['product_id' => $product->id]) }}"
    method="POST"
    enctype="multipart/form-data"
>
    @csrf

    <div class="productDetail">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        {{-- 元々の画像を保持する為に追加 --}}
        <input type="hidden" name="product_img" value="{{$product->productImg}}">
        <div class="productDetail__img">
            <img src="{{ asset($product->productImg) }}" alt="">
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
        <div class="productDetail__info">
            <div class="productDetail__name">
                <label for="name" class="form-label">商品名</label>
                <input
                  type="text"
                  name="name"
                  class="form-control @error('name') is-invalid @enderror"
                  id="name"
                  value="{{ $product->name }}"
                  autocomplete="name"
                  autofocus
                >
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="productDetail__price">
                <label for="price" class="form-label">金額</label>
                <input
                  type="text"
                  class="form-control @error('price') is-invalid @enderror"
                  id="price"
                  name="price"
                  placeholder="¥"
                  value="{{ $product->price }}"
                  autocomplete="price"
                  autofocus
                >
                @error('price')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>

            <button tipe="button" name="edit" class="productDetail__cart">
                    <h5>編集</h5>
            </button>

            <button tipe="button" name="delete" class="productDetail__cart">
                    <h5>削除</h5>
            </button>

        </div>
    </div>
</form>

<button type="button" onClick="history.back()">戻る</button>

@endsection
