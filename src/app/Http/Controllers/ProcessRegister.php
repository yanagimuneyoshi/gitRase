<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;


class ProcessRegisterController extends Controller
{
  public function processRegister(Request $request)
  {
    $username = $request->input('username');
    $email = $request->input('email');
    $password = $request->input('password');


    $existingUser = User::where('email', $email)->first();
    if ($existingUser) {

      return back()->withErrors(['email' => 'メールアドレス 重複エラー']);
    }


    $user = new User();
    $user->name = $username;
    $user->email = $email;
    $user->password = bcrypt($password);
    $user->save();


    return redirect('/thanks');
  }
}