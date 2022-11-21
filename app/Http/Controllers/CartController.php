<?php

namespace App\Http\Controllers;

use App\Models\Wear;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $products = null;

        if ($request->hasCookie('cart')) {
            $strCookieData = $request->cookie('cart');
            $cookieData = explode(",", $strCookieData);

            $keys = ['size_id', 'product_id'];

            $t = array();
            $tt = array();

            for ($i = 0; $i < count($cookieData); $i++) {
                array_push($t, (int) $cookieData[$i]);

                if ($i % 2 !== 0) {



                    array_push($tt, array_combine($keys, $t));

                    $t = array();
                }
            }

            $wear = new Wear();
            $products = $wear->searchInCartProducts($tt);
          }


          return view('pages.cart', compact('products'));
        }
    }
