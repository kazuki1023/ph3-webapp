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

        // 今日の日付を取得して、今日の勉強時間を取得する
        $todayHour = Hour::todayHour();
        dd($todayHour);

        // 今月の勉強時間を取得する
        $currentMonthHour = Hour::TotalHourCurrentMonth();

        // これまでの学習時間を取得する
        $totalHour = Hour::TotalHour();
        return view('/dashboard', compact('hourData', 'mediumHourData', 'languageHourData', 'todayHour', 'currentMonthHour', 'totalHour'));
    }
}
