<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Reserve;


class ReservationController extends \App\Http\Controllers\Controller
{
    public function store(Request $request)
    {
        // バリデーション（必要に応じて）

        // 予約データの作成
       $reservation = new Reserve();

        $reservation->shop_ID = $request->input('shop_id');
        $reservation->user_ID = auth()->user()->id; // ユーザーのIDを取得する方法に応じて変更してください
        $reservation->date = $request->input('date');
        $reservation->time = $request->input('time');
        $reservation->people = $request->input('guests');
        $reservation->save();

        // 成功時の処理やリダイレクト先を設定する（例えば予約完了ページなど）
        return redirect()->route('done');
    }
}
