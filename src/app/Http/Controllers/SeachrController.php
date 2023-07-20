<?php

namespace App\Http\Controllers;


use App\Models\Shop;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    $search = shop_all::with('category')->CategorySearch($request->area_id)->KeywordSearch($request->keyword)->get();
    $areas = Category::all();

    return view('index', compact('todos', 'categories'));

    // return view('search_results', compact('results'));
  }
}
