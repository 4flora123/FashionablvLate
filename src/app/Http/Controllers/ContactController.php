<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  //*お問い合わせフォーム入力ページを呼び出す//
  public function index()
  {
    return view('index');
  }

  /*送信ボタンクリック時に行われる処理*/
  public function confirm(Request $request)
  {
    $contact = $request->only(['name', 'email', 'tel', 'content']);
    return view('confirm', ['contact' => $contact]);
  }
}
