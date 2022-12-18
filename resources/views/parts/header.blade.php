        <div class="l-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  {{-- Mens --}}
                <li class="nav-item">
                  <a class="nav-link" href=" {{ route("productList", ['sex_id' => 2]) }}">Mens</a>
                </li>
                {{-- Woman --}}
                <li class="nav-item">
                  <a class="nav-link" href=" {{ route("productList", ['sex_id' => 1]) }}">Woman</a>
                </li>
                {{-- ロゴ --}}
                  <a class="navbar-brand" href="#"></a>
                  <div class="main-logo">
                    <img src="{{ asset("images/STElla Golf.png") }}" alt="">
                </div>
                </li>

                {{-- カート --}}
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('cart') }}">カート</a>
                </li>

                @auth
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" style="background-color: white; border:none;"  class="nav-link">ログアウト</button>
                    </form>
                </li>

                {{-- 管理者の場合管理者ログインボタンを出す --}}
                @if (auth()->user()->role === 1)
                    <a class="nav-link" href="{{ route('admin') }}">管理者</a>
                @endif

                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                </li>
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">会員登録</a>
        @endif
    @endauth
</ul>
</div>
</nav>
</div>
