<?php

namespace App\Http\Controllers;

use App\Models\Shop;



class ShopController extends Controller
{
  public function show($id)
  {
    $shop = Shop::findOrFail($id); // 指定されたIDに該当する店舗を取得
    return view('shop_detail', compact('shop'));
  }
}


// 他のメソッド...
