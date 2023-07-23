<?php

namespace App\Http\Controllers;


use App\Models\Shop;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    logger('test', ['foo' => 'bar']);
    $area = $request->input('areas');
    $genre = $request->input('genres');
    $keyword = $request->input('keyword');

    $query = shop::select();

    if ($area) {
        $query->where('area_id', '=', $area);
    }

    if ($genre) {
      $query->where('genre_id', '=', $genre);
    }

    if ($keyword) {
      $query->where('name', '=', $keyword);
    }

    $query->get();

    $ids = array();
    foreach ($query as $q) {
      $ids[] = $q->id();
    }

    echo json_encode($ids);
    return;


    // return view('shop_all', compact('search'));
  }
}
