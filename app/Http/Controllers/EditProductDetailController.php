<?php

namespace App\Http\Controllers;

use App\Models\Wear;
use Illuminate\Http\Request;

class EditProductDetailController extends Controller
{
    public function index($product_id)
    {
        $wear = new Wear();
        $product = $wear->searchProduct($product_id);
        return view('pages.editProductDetail', compact('product'));
    }

    // DELETE/EDIT追加
    
}
