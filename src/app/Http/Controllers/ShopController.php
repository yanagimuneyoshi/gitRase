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
    $shops = Shop::all();

    // ... 検索のロジック ...

    return view('shop_all', compact('shops', 'areas', 'genres'));
}



  public function search(Request $request)
  {
    logger('test', ['foo' => 'bar']);

    var_dump($request->input('all_areas'), $request->input('all_genres'), $request->input('keyword'));

    // $shops = Shop::all();
    $area = $request->input('all_areas');
    $genre = $request->input('all_genres');
    $keyword = $request->input('keyword');
    // if ($area) {
    //   $query->where('area_id', '=', $area);
    // }

    // if ($genre) {
    //   $query->where('genre_id', '=', $genre);
    // }

    // if ($keyword) {
    //   $query->where('name', 'like', '%' . $keyword . '%');
    // }

    // if ($request->wantsJson()) {
    //   return response()->json($shops);
    // }
    // if ($area === "all") {
    //   $area = null; // もしくは適切な全ての値を代入
    // }
    // if ($genre === "all") {
    //   $genre = null; // もしくは適切な全ての値を代入
    // }
    $area = ($area === "all" || $area === null) ? "all" : $area;
    $genre = ($genre === "all" || $genre === null) ? "all" : $genre;

    // PHPのsearchメソッド内でデータを受け取る
    $rawData = file_get_contents('php://input');
    $data = json_decode($rawData, true); // JSONデータを連想配列としてデコード

    // 連想配列からデータを取得
    $area = $data['all_areas'] ?? $area;
    $genre = $data['all_genres'] ?? $genre;
    $keyword = $data['keyword'] ?? $keyword;

    // 取得したデータを確認（デバッグ用）
    var_dump($area, $genre, $keyword);

    // $shops = Shop::all();
    $shops = Shop::where(function ($query) use ($area, $genre, $keyword) {
      if ($area !== 'all') {
        $query->where('area_id', '=', $area);
      }
      if ($genre !== 'all') {
        $query->where('genre_id', '=', $genre);
      }
      if (!empty($keyword)) {
        $query->where('name', 'like', '%' . $keyword . '%');
      }
    })->get();
    $areas = Area::all(); // 追加：$areas 変数を初期化
    $genres = Genre::all(); // 追加：$genres 変数を初期化



    return view('shop_all', compact('shops', 'areas', 'genres'));
    //return response()->json($shops);

  
  }
}
