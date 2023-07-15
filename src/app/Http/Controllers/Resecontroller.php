<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;

class ReseController extends Controller
{
    public function shop_all()
    {
        $shops = Shop::all();
        $areas = Area::all();
        $genres = Genre::all();

        return view('shop_all', compact('shops', 'areas', 'genres'));
    }



    public function register()
    {
        return view('register');
    }

    public function shop_detail()
    {
        return view('shop_detail');
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



    public function my_page()
    {
        return view('my_page');
    }




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

    public function processLogin(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');


        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            return redirect('/menu1');
        } else {

            return back()->withErrors(['login_error' => 'メールアドレスまたはパスワードが違います。']);
        }
    }
}
