<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
