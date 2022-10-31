@section('title', 'Stella Golf')
@extends('app')
@section('content')

<div class="container">
    <div class="py-5 text-center">
      <h2>精算フォーム</h2>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">カート</span>
          <span class="badge badge-secondary badge-pill">2</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">CELLO JACKET</h6>
              <small class="text-muted">サイズ:S 数量:1</small>
            </div>
            <span class="text-muted">￥20000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">ROTIE PILE TOP</h6>
              <small class="text-muted">サイズ:S 数量:1</small>
            </div>
            <span class="text-muted">￥10000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>合計 (円)</span>
            <strong>￥30000</strong>
          </li>
        </ul>

        {{-- <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="プロモーションコード">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">適用</button>
            </div>
          </div>
        </form> --}}
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">請求先住所</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="familyName">姓</label>
              <input type="text" class="form-control" id="familyName" placeholder="" value="" required>
              <div class="invalid-feedback">
                名字を入力してください
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="givenName">名</label>
              <input type="text" class="form-control" id="givenName" placeholder="" value="" required>
              <div class="invalid-feedback">
                名前を入力してください
              </div>
            </div>
          </div>

          {{-- <div class="mb-3">
            <label for="username">ユーザー名</label>
            <div class="input-group has-validation">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="username" placeholder="ユーザー名" required>
              <div class="invalid-feedback" style="width: 100%;">
                ユーザー名が必要です
              </div>
            </div>
          </div> --}}

          <div class="mb-3">
            <label for="email">Eメール <span class="text-muted"></span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              配送の更新に有効なメールアドレスを入力してください
            </div>
          </div>

          <div class="mb-3">
            <label for="address">住所</label>
            <input type="text" class="form-control" id="address" placeholder="地番" required>
            <div class="invalid-feedback">
              配送先住所を入力してください
            </div>
          </div>

          <div class="mb-3">
            <label for="address2">住所 2 <span class="text-muted">(任意)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="アパート・マンション名">
          </div>

          <div class="row">

        <div class="h-adr">
            <span class="p-country-name" style="display:none;">Japan</span>
            〒<input type="text" class="p-postal-code" size="8" maxlength="8"><br>
            <select class="p-region-id">
            <option value="">--</option>
            <option value="1">北海道</option>
            <option value="2">青森県</option>
            <option value="3">岩手県</option>
            <option value="4">宮城県</option>
            <option value="5">秋田県</option>
            <option value="6">山形県</option>
            <option value="7">福島県</option>
            <option value="8">茨城県</option>
            <option value="9">栃木県</option>
            <option value="10">群馬県</option>
            <option value="11">埼玉県</option>
            <option value="12">千葉県</option>
            <option value="13">東京都</option>
            <option value="14">神奈川県</option>
            <option value="15">新潟県</option>
            <option value="16">富山県</option>
            <option value="17">石川県</option>
            <option value="18">福井県</option>
            <option value="19">山梨県</option>
            <option value="20">長野県</option>
            <option value="21">岐阜県</option>
            <option value="22">静岡県</option>
            <option value="23">愛知県</option>
            <option value="24">三重県</option>
            <option value="25">滋賀県</option>
            <option value="26">京都府</option>
            <option value="27">大阪府</option>
            <option value="28">兵庫県</option>
            <option value="29">奈良県</option>
            <option value="30">和歌山県</option>
            <option value="31">鳥取県</option>
            <option value="32">島根県</option>
            <option value="33">岡山県</option>
            <option value="34">広島県</option>
            <option value="35">山口県</option>
            <option value="36">徳島県</option>
            <option value="37">香川県</option>
            <option value="38">愛媛県</option>
            <option value="39">高知県</option>
            <option value="40">福岡県</option>
            <option value="41">佐賀県</option>
            <option value="42">長崎県</option>
            <option value="43">熊本県</option>
            <option value="44">大分県</option>
            <option value="45">宮崎県</option>
            <option value="46">鹿児島県</option>
            <option value="47">沖縄県</option>
            </select><br>
            <input type="text" class="p-locality p-street-address p-extended-address"/><br>
            </div>
          </div>

          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="addressCheck">
            <label class="custom-control-label" for="addressCheck">配送先住所は、請求先住所と同じです</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="keepCheck">
            <label class="custom-control-label" for="keepCheck">次回のために、この情報を保存する</label>
          </div>
          <hr class="mb-4">

          <h4 class="mb-3">お支払い方法</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">クレジットカード</label>
            </div>
            {{-- <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">デビットカード</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">PayPal</label>
            </div> --}}
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">カードの名義</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">カード上に表示されているフルネーム</small>
              <div class="invalid-feedback">
                カードの名義を入力してください
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">クレジットカード番号</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                クレジットカード番号を入力してください
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">有効期限</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                有効期限を入力してください
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-cvv">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                セキュリティコードを入力してください
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">精算を続ける</button>
          <a href="{{ route('confirm') }}">
          </a>
        </div>
        </form>
      </div>
    </div>


    {{-- <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017-2019 会社名</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">プライバシー</a></li>
        <li class="list-inline-item"><a href="#">条項</a></li>
        <li class="list-inline-item"><a href="#">サポート</a></li>
      </ul>
    </footer>
  </div> --}}

@endsection
