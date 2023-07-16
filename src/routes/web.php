<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReseController;
use App\Http\Controllers\FavoriteController;

Route::get('/', [ReseController::class, 'shop_all']);
Route::post('/', [FavoriteController::class, 'processFavorite'])->name('favorite');


Route::get('/menu1', [ReseController::class, 'menu1']);

Route::get('/menu2', [ReseController::class, 'menu2']);

Route::get('/register', [ReseController::class, 'register'])->name('register');
Route::post('/register', [ReseController::class, 'processRegister']);

Route::get('/thanks', [ReseController::class, 'thanks'])->name('thanks');

Route::get('/login', [ReseController::class, 'login'])->name('login');
Route::post('/login', [ReseController::class, 'processLogin']);

Route::get('/my_page', [ReseController::class, 'my_page']);

Route::get('/detail/{shop_id}', [ReseController::class, 'shop_detail']);

Route::get('/done', [ReseController::class, 'done']);

Route::get('/shop_detail', [ReseController::class, 'shop_detail']);


