<?php

namespace App\Http\Controllers;

use App\Models\Wear;

class productDetailController extends Controller
{
    public function index($product_id)
    {
        $wear = new Wear();
        $product = $wear->searchProduct($product_id);
        return view('pages.productDetail', compact('product'));
    }
}
