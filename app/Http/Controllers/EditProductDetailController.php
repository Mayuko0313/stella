<?php

namespace App\Http\Controllers;

use App\Models\Wear;
use Illuminate\Http\Request;

class EditProductDetailController extends Controller
{
    public function index($sex_id)
    {
        $wear = new Wear();
        $products = $wear->getAllProduct($sex_id);
        $currentPage = (int) $sex_id === 1 ? 'Womans' : 'Mens';
        return view('pages.editProductDetail', compact('products', 'currentPage'));
    }
}
