<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReseController;

Route::get('/', [ReseController::class, 'shop_all']);
Route::get('/menu1', [ReseController::class, 'menu1']);
Route::get('/menu2', [ReseController::class, 'menu2']);
Route::get('/register', [ReseController::class, 'register']);
Route::post('/menu2', [ReseController::class, 'menu2'])->name('menu2');
Route::get('/thanks', [ReseController::class, 'thanks']);
Route::get('/login', [ReseController::class, 'login']);
Route::get('/mypage', [ReseController::class, 'mypage']);
Route::get('/detail/{shop_id}', [ReseController::class, 'shop_detail']);
Route::get('/done', [ReseController::class, 'done']);
