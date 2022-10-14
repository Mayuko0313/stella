        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  {{-- Mens --}}
                <li class="nav-item">
                  <a class="nav-link" href="#">Mens</a>
                </li>
                {{-- Woman --}}
                <li class="nav-item">
                  <a class="nav-link" href="#">Woman</a>
                </li>
                {{-- ロゴ --}}
                  <a class="navbar-brand" href="#">ロゴ</a>
                </li>

                {{-- カート --}}
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">カート</a>
                </li>

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">ログアウト</a>
                </li>
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
