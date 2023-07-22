<?php

namespace App\Http\Controllers;


use App\Models\Shop;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    $area = $request->input('areas');
    $genre = $request->input('genres');

    $query = Contact::select('areas','genres');

    if ($area) {
        $query->where('areas', 'LIKE', '%', $area. '%');
    }

    if ($genre) {
      $query->where('genres', 'LIKE', '%', $genre . '%');
    }


    return view('shop_all', compact('search'));
  }
}
