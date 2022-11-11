<?php

namespace App\Http\Controllers;

use App\Models\Wear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddProductController extends Controller
{
    public function index()
    {
        return view('pages.addProduct');
    }

    public function addPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => ['required', 'string', 'max:10'],
            'product_price' => ['required', 'regex:/^[0-9]+$/i']
        ]);

        if ($validator->fails()) {
            // もしエラーがあったら
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput();
        } else {
            // エラーがなかった場合

            $wear = new Wear();

            $wear->addProduct(
                $request->product_name,
                $request->product_sex,
                $request->product_type,
                $request->product_price
            );
        }

        return view('pages.addProduct');
    }
}