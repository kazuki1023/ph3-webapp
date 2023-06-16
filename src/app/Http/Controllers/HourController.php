<?php

namespace App\Http\Controllers;
use App\Models\Hour;
use App\Models\HourMedium;
use App\Models\HourLanguage;
use Illuminate\Http\Request;

class HourController extends Controller
{
    public function index()
    {
        // 棒グラフ用のデータを取得
        $hourData = Hour::totalHourByDate()->get();

        // 学習媒体別の円グラフ用のデータを取得
        $mediumHourData = HourMedium::totalHourByMedium()->get();

        // 学習言語ごとの円グラフ用のデータを取得
        $languageHourData = HourLanguage::totalHourByLanguage()->get();
        return view('/dashboard', compact('hourData', 'mediumHourData', 'languageHourData'));
    }
}
