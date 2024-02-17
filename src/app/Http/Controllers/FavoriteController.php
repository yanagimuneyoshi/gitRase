<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
  public function processFavorite(Request $request)
  {
    if (!Auth::check()) {
      // ログインしていない場合はエラー処理やリダイレクトなどを行う
      return redirect()->route('login');
    }

    $favorite = new Favorite();
    $favorite->user_id = auth()->user()->id; // ログインユーザーのIDを設定（前提として認証が必要です）
    $favorite->shop_id = $request->input('shop_id'); // フォームから正しくショップIDを取得
    // return redirect()->route('home');

    try {
      $favorite->save();
    } catch (\Exception $e) {
      // エラーハンドリング処理を記述（例: ログ出力、エラーメッセージの表示など）
      return back()->withErrors(['error' => 'お気に入りの追加に失敗しました。']);
    }

    // お気に入り追加後の処理を記述（例: リダイレクトなど）
    return back();
  
  }

  public function toggleFavorite(Request $request)
  {
    $shopId = $request->input('shop_id');
    $isFavorited = $request->input('is_favorited');

    // ここでお気に入りの登録・削除を実装

    return response()->json(['success' => true]);
  }
}
