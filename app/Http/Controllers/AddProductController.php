<?php

namespace App\Http\Controllers;

use App\Models\Wear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
            'product_name' => ['required', 'string', 'max:20'],
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
            $img = '';
            if ($request->customfile) {
                $file_name1 =
                    time()   . '_' . $request->customfile->getClientOriginalName();
                $request->customfile->storeAs('public', $file_name1);

                $img = 'storage/' . $file_name1;
            }




            $wear = new Wear();

            $wear->addProduct(
                $request->product_name,
                $img,
                $request->product_sex,
                $request->product_type,
                $request->product_price
            );

            Session::flash('flash_message', 'データベースに保存できました。');
        }

        return redirect('/addProduct');
    }
}
