<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
      <ul class="nav flex-column">

        <li class="nav-item">
          <button class="nav-link" type="submit">
          <a href="{{ route("addProduct") }}">
            商品追加
          </button>
          </a>
        </li>

        <li class="nav-item">
          <button class="nav-link" type="submit">
          <a href="{{ route("editProduct", ['sex_id' => 2]) }}">
            商品削除/編集(Mens)
          </button>
          </a>
        </li>

        <li class="nav-item">
            <button class="nav-link" type="submit">
            <a href="{{ route("editProduct", ['sex_id' => 1]) }}">
              商品削除/編集(Woman)
            </button>
            </a>
        </li>

      </ul>
      </ul>
    </div>
  </nav>
