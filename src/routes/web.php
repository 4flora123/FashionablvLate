<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;


//フォーム入力ページを呼び出すルーティング
Route::get('/index', [ContactController::class, 'index']);

//送信ボタンがクリックされた時に 入力確認ページを呼び出すルーティング
Route::POST('/contacts/confirm',[ContactController::class, 'confirm']);

//お問い合わせ完了ページを呼び出すルーティング
Route::POST('/contacts',[ContactController::class, 'store']);