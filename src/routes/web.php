<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;


//indexアクションを呼び出すルーティング
Route::get('/index', [ContactController::class, 'index']);

//送信ボタンがクリックされた時に confirm アクションが実行されるルーティング
Route::POST('/contacts/confirm',[ContactController::class, 'confirm']);