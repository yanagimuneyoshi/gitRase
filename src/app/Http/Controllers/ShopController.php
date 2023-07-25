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

  public function allDisplay(Request $request)
  {
    $areas = Area::all();
    $genres = Genre::all();

    $searchTerm = $request->input('Search');

    
    // 検索処理を行い、$shopsに検索結果を格納するなどのコードを追加

    // 例：nameカラムが検索ワードを含む店舗を取得する例
    $shops = Shop::where('name', 'like', '%' . $searchTerm . '%')->get();

    return view('shop_all', compact('shops', 'areas', 'genres'));
  }



  public function search(Request $request)
  {
    logger('test', ['foo' => 'bar']);
    // $shops = Shop::all();
    $area = $request->input('all_areas');
    $genre = $request->input('all_genres');
    $keyword = $request->input('keyword');

    $query = Shop::query();
    // $shops = $query->get();

    // $query = Shop::select();

    if ($area) {
      $query->where('area_id', '=', $area);
    }

    if ($genre) {
      $query->where('genre_id', '=', $genre);
    }

    if ($keyword) {
      $query->where('name', 'like', '%' . $keyword . '%');
    }

    $shops = $query->get();

    if ($request->wantsJson()) {
      return response()->json($shops);
    }

    // $results = $query->get();

    // 検索結果をビューに渡す
    // return view('shop_all', compact('results'));
    //
    // $shop = $query->get();
    // $areas = Area::all();
    // $genres = Genre::all();
    // return view('search_results', compact('results', 'areas', 'genres'));
    $areas = Area::all();
    $genres = Genre::all();

    return view('shop_all', compact('shops', 'areas', 'genres'));

    // return response()->json($shops);

    // return view('shop_all', compact('shops', 'areas', 'genres'));
  }
}
