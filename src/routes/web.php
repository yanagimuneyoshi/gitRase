<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ReseController::class, 'shop_all']);


Route::get('/menu1', [ReseController::class, 'menu1']);

Route::get('/menu2', [ReseController::class, 'menu2']);

Route::get('/register', [ReseController::class, 'register']);

Route::get('/thanks', [ReseController::class, 'thanks']);

Route::get('/login', [ReseController::class, 'login']);

Route::get('/mypage', [ReseController::class, 'mypage']);

Route::get('/detail/:shop_id', [ReseController::class, 'shop_detail']);

Route::get('/done', [ReseController::class, 'done']);