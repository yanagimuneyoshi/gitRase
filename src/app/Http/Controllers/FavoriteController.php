<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;

class FavoriteController extends Controller
{
  public function processFavorite(Request $request)
{
    $favorite = new Favorite();
    $favorite->user_id = Auth::user()->id; // ログインユーザーのIDを設定（前提として認証が必要です）
    $favorite->shop_id = $request->input('favorite');
    $favorite->save();

    // お気に入り追加後の処理を記述（例: リダイレクトなど）
}

}
