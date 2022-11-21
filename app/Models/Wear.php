<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wear extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'productImg',
        'sex_id',
        'type_id',
        'price'
    ];

    public function addProduct($name, $productImg, $sex_id, $type_id, $price)
    {
        DB::table('wears')
            ->insert(
                [
                    'name' => $name,
                    'productImg' => $productImg,
                    'sex_id' => $sex_id,
                    'type_id' => $type_id,
                    'price' => $price
                ]
            );
    }

    public function getAllProduct($sex_id)
    {
        $param = [
            'sex_id' => $sex_id
        ];
        $result = DB::select(
            "SELECT
                w.id,
                w.name as name,
                w.productImg,
                s.name as sex,
                t.name as type,
                price
            FROM
                wears as w
            JOIN sexes as s
                ON w.sex_id = s.id
            JOIN types as t
                ON w.type_id = t.id
            WHERE w.sex_id = :sex_id",
            $param
        );

        return $result;
    }

    public function searchProduct($product_id)
    {
        $result = DB::table('wears')
            ->select(
                'id',
                'name',
                'productImg',
                'price'
            )
            ->where('id', '=', $product_id)
            ->get()
            ->first();

        return $result;
    }

    public function searchInCartProducts($cartData)
    {
        $results = array();

        foreach ($cartData as $data) {
            $product = DB::table('wears')
                ->select(
                    'id',
                    'name',
                    'productImg',
                    'price'
                )
                ->where('id', '=', $data['product_id'])
                ->get()
                ->first();

            $size = DB::table('sizes')
                ->select(
                    'name'
                )
                ->where('id', '=', $data['size_id'])
                ->get()
                ->first();

            $result = [
                'size' => $size->name,
                'id' => $product->id,
                'name' => $product->name,
                'img' => $product->productImg,
                'price' => $product->price
            ];

            array_push($results, $result);
        }


        return $results;
    }
}
