<?php

namespace App\Http\Controllers;

use App\Models\Wear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class productDetailController extends Controller
{
    public function index($product_id)
    {
        $wear = new Wear();
        $product = $wear->searchProduct($product_id);
        return view('pages.productDetail', compact('product'));
    }


    public function addCart(Request $request)
    {
        // カートのデータを初期化
        $cartData = '';
        $data = '';

        // CookieがあればCookieを取得
        if ($request->hasCookie('cart')) {
            $data = $request->cookie('cart');
            $cartData = $data . ',' . $request->size_id . ',' . $request->product_id;
        } else {
            $cartData = $request->size_id . ',' . $request->product_id;
        }

        // Cookieにデータをセット
        Cookie::queue('cart', $cartData);

        // メッセージをセット
        Session::flash('flash_message', 'カートに保存しました。');
        return redirect()->route('productDetail', ['product_id' => $request->product_id]);
    }
}
