<?php

namespace App\Http\Controllers;


use App\Models\Wear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    public function index(Request $request)
    {
        // dd(Route::currentRouteName());
        // カート内の商品情報初期化
        $products = null;

        // カートのCookieがあるかを確認
        if ($request->hasCookie('cart')){
            // Cookieの情報を配列にセット
            $strCookieData = $request->cookie('cart');
            $cookieData = explode(",", $strCookieData);

            // 商品情報の配列のキー
            $keys = ['size_id', 'product_id'];


            // 一時的に商品情報をセットしておく
            $t = array();
            $tt = array();

            // $tt = こんな形にする
            // [
            //     0 => [
            //         'size_id' => ～～,
            //         'product_id' => ～～
            //     ],
            //     1 => [
            //         'size_id' => ～～,
            //         'product_id' => ～～
            //     ]
            // ]

            for ($i = 0; $i < count($cookieData); $i++) {
                array_push($t, (int) $cookieData[$i]);

                if ($i % 2 !== 0) {



                    // 加工した商品情報の配列を$ttにセット
                    array_push($tt, array_combine($keys, $t));

                    // 一つの商品情報ごとに空にする
                    $t = array();

                }
            }

            $wear = new Wear();
            $products = $wear->searchInCartProducts($tt);
          }

          return view('pages.cart', compact('products'));
    }

    public function remove(Request $request)
    {
        $id = $request->id;
        $size_name = $request->size_name;
        $wear = new Wear();
        $size_id = $wear->getSizeId($size_name);
        $strCookieData = $request->cookie('cart');
        $strCookieData = str_replace($size_id.','.$id.',', '', $strCookieData);

        // 最後の商品
        if (strpos($strCookieData, $size_id . ',' . $id) !== false) {
            $strCookieData = str_replace(',' . $size_id . ',' . $id, '', $strCookieData);
        }

        if(str_contains($size_id.','.$id, $strCookieData)){
            $strCookieData = str_replace($size_id.','.$id, '', $strCookieData);
        }
        $strCookieData = ltrim($strCookieData, ',');
        if($strCookieData===""){
            Cookie::queue(Cookie::forget('cart'));
        } else {
            Cookie::queue('cart', $strCookieData);
        }
        return redirect('/cart');
    }

    public function buyProcess(Request $request)
    {
        // カート内の商品情報初期化
        $products = null;
    $totalprice = 0;
        // カートのCookieがあるかを確認
        if ($request->hasCookie('cart')){
            // Cookieの情報を配列にセット
            $strCookieData = $request->cookie('cart');
            $products=self::cart($strCookieData);
            foreach($products as $product){
                $price =  $product['price'] * $product['count'];
                $totalprice += $price;
            }
        }
           return view('pages.buyProcess')->with([
            'products' => $products,
            'totalPrice' => $totalprice
           ]);
    }

    private static function cart(string $strCookieData){
        // カートのCookieがあるかを確認
            $cookieData = explode(",", $strCookieData);

            // 商品情報の配列のキー
            $keys = ['size_id', 'product_id'];


            // 一時的に商品情報をセットしておく
            $t = array();
            $tt = array();

            // $tt = こんな形にする
            // [
            //     0 => [
            //         'size_id' => ～～,
            //         'product_id' => ～～
            //     ],
            //     1 => [
            //         'size_id' => ～～,
            //         'product_id' => ～～
            //     ]
            // ]

            for ($i = 0; $i < count($cookieData); $i++) {
                array_push($t, (int) $cookieData[$i]);

                if ($i % 2 !== 0) {



                    // 加工した商品情報の配列を$ttにセット
                    array_push($tt, array_combine($keys, $t));

                    // 一つの商品情報ごとに空にする
                    $t = array();

                }
            }

            $wear = new Wear();
            $products = $wear->searchInCartProducts($tt);
            return $products;
    }
}
