<?php

namespace App\Http\Controllers;

use App\Models\Wear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class EditProductDetailController extends Controller
{
    public function index($product_id)
    {
        $wear = new Wear();
        $product = $wear->searchProduct($product_id);
        return view('pages.editProductDetail', compact('product'));
    }

    // 管理者画面　商品編集・削除
    public function editProduct(Request $request, $product_id)
    {
        // 削除ボタン押されたら
        if (isset($_POST['delete'])) {
            Wear::find($product_id)->delete();
            return redirect('/addProduct');
        }
        // 編集ボタン押されたら
        if (isset($_POST['edit'])) {
                $validator = Validator::make($request->all(), [
                    'name' => ['required', 'string', 'max:10'],
                    'price' => ['required', 'regex:/^[0-9]+$/i']
            ]);

                if ($validator->fails()) {
                    // もしエラーがあったら
                    return redirect()
                        ->back()
                        ->withErrors($validator->errors())
                        ->withInput();
                } else {
                    // エラーがなかった場合
                    // ファイル選択されなかったら
                    $img = $request->product_img;
                    // ファイル選択されたら
                    if ($request->customfile) {
                        $img = '';
                        $file_name1 =
                            time()   . '_' . $request->customfile->getClientOriginalName();
                        $request->customfile->storeAs('public', $file_name1);

                        $img = 'storage/' . $file_name1;
                    }

                    // インスタンス化（コピーしたもの）Wear.php
                    $wear = new Wear();

                    // 編集メソッド
                    $wear->editProduct(
                        $product_id,
                        $img,
                        $request->name,
                        $request->price
                    );

                    // セッションにデータを詰め込む
                    Session::flash('flash_message', 'データを更新しました。');
                    // 元のページへ遷移
                    return redirect()->route('editProductDetail', ['product_id' => $product_id]);
                }
            }
    }
}
