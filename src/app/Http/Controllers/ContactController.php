<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
  //*お問い合わせフォーム入力ページを呼び出す//
  public function index(Request $request)
  {
    return view('index');
  }

  /*お問い合わせ確認ページを呼び出す*/
  public function confirm(Request $request)
  {
    $contact = $request->only(['name','gender', 'email', 'tel','address','Building_Name','inquiry_type', 'content']);
    return view('confirm', ['contact' => $contact]);
  }

  /*お問い合わせ完了ページを呼び出す */
  public function store()
  {
    $contact = $request->only(['name','gender', 'email', 'tel','address','Building_Name','inquiry_type', 'content']);
    Contact::create($contact);
    return view('thanks');
  }
}
