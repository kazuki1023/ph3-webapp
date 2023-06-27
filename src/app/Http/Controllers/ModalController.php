<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Medium;

class ModalController extends Controller
{
    //登録モーダル
    public function index() {
        // 学種言語を取得する
        $languages = Language::all();

        // 学習媒体を取得する
        $media = Medium::all();
        return view('layouts.modal.register', compact('languages', 'media'));
    }
}
