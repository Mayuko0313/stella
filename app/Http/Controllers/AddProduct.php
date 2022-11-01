<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProduct extends Controller
{
    public function index()
    {
    return view('pages.addProduct');
    }

    public function addPost() {
        $mayuko = '女性';
        dd('まゆこ');
    }
}
