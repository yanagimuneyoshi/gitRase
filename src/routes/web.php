<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReseController;

Route::get('/', [ReseController::class, 'shop_all']);

Route::get('/menu1', [ReseController::class, 'menu1']);

Route::get('/menu2', [ReseController::class, 'menu2']);
// Route::post('/', [ReseController::class, 'shop_all'])->name('shop_all');

Route::get('/register', [ReseController::class, 'register']);
Route::post('/register', [ReseController::class, 'processRegister'])->name('register');

Route::get('/thanks', [ReseController::class, 'thanks']);
Route::post('/thanks', [ReseController::class, 'thanks'])->name('thanks');

Route::get('/login', [ReseController::class, 'login']);
Route::post('/login', [ReseController::class, 'processLogin'])->name('login'); // 修正点: ログイン処理を行うメソッド名をprocessLoginに修正

Route::get('/mypage', [ReseController::class, 'mypage']);

Route::get('/detail/{shop_id}', [ReseController::class, 'shop_detail']);

Route::get('/done', [ReseController::class, 'done']);
