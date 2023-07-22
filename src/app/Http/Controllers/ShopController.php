<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Genre;


class ShopController extends Controller
{
  public function index()
  {
    $shops = Shop::all();
    return view('shop_all', compact('shops'));
  }

  public function show($id)
  {
    $shop = Shop::findOrFail($id);
    return view('shop_detail', compact('shop'));
  }

  public function search(Request $request)
  {
    $areas = Area::all();
    $genres = Genre::all();

    $searchTerm = $request->input('Search');

    // 検索処理を行い、$shopsに検索結果を格納するなどのコードを追加

    // 例：nameカラムが検索ワードを含む店舗を取得する例
    $shops = Shop::where('name', 'like', '%' . $searchTerm . '%')->get();

    return view('search_results', compact('shops', 'areas', 'genres'));
  }
}
