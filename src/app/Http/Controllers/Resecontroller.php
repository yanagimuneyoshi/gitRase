<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReseController extends Controller
{
    public function shop_all()
    {
        return view('shop_all');
    }

    public function register()
    {
        return view('register');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function done()
    {
        return view('done');
    }

    public function menu1()
    {
        return view('menu1');
    }

    public function menu2()
    {
        return view('menu2');
    }

    public function login()
    {
        return view('login');
    }

    public function processRegister(Request $request)
    {
        // ユーザーの入力値を取得
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        // 既存のメールアドレスをチェック
        $existingUser = User::where('email', $email)->first();
        if ($existingUser) {
            // メールアドレスが既に存在する場合はエラーメッセージを返す
            return back()->withErrors(['email' => 'メールアドレス 重複エラー']);
        }

        // ユーザーモデルを作成して保存
        $user = new User();
        $user->name = $username;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        // 登録後の処理（例: リダイレクト、メッセージ表示など）
        return redirect('/thanks');
    }

    public function processLogin(Request $request)
    {
        // ユーザーの入力値を取得
        $email = $request->input('email');
        $password = $request->input('password');

        // ユーザー認証を行う
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // 認証成功時の処理（例: リダイレクト、セッション設定など）
            return redirect('/menu1');
        } else {
            // 認証失敗時の処理（例: エラーメッセージの表示など）
            return back()->withErrors(['login_error' => 'メールアドレスまたはパスワードが違います。']);
        }
    }

}
