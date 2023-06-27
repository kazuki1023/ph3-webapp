<?php

namespace App\Http\Controllers;
use App\Models\Hour;
use App\Models\HourMedium;
use App\Models\HourLanguage;
use App\Models\Language;
use App\Models\Medium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $todayHour = Hour::todayHour()->value('total_hour');

        // 今月の勉強時間を取得する
        $currentMonthHour = Hour::TotalHourCurrentMonth();

        // これまでの学習時間を取得する
        $totalHour = Hour::TotalHour();

        // 学種言語を取得する
        $languages = Language::all();

        // 学習媒体を取得する
        $media = Medium::all();
        return view('/dashboard', compact('hourData', 'mediumHourData', 'languageHourData', 'todayHour', 'currentMonthHour', 'totalHour', 'languages', 'media'));
    }

    // 登録処理
    public function store(Request $request)
    {
        // バリデーション
        $rules = [
            'date' => 'required|date',
            'lang' => 'required',
            'media' => 'required',
            'studyHours' => 'required|integer',
        ];
        $messages = [
            'date.required' => '学習日を入力してください',
            'lang.required' => '学習言語を１つ以上選択してください',
            'media.required' => '学習媒体を１つ以上選択してください',
            'studyHours.required' => '学習時間を選択してください',
            'studyHours.integer' => '学習時間を選択してください',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // バリデーションエラーが発生した場合の処理
            dd($request->all());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // データの登録
        Hour::create([
            'user_id' => 1,
            'time' => $request->studyHours,
            'date' => $request->date,
        ]);
        $hourData = Hour::totalHourByDate()->get();
        $mediumHourData = HourMedium::totalHourByMedium()->get();
        $languageHourData = HourLanguage::totalHourByLanguage()->get();
        $todayHour = Hour::todayHour()->value('total_hour');
        $currentMonthHour = Hour::TotalHourCurrentMonth();
        $totalHour = Hour::TotalHour();
        $languages = Language::all();
        $media = Medium::all();
        return view('/dashboard', compact('hourData', 'mediumHourData', 'languageHourData', 'todayHour', 'currentMonthHour', 'totalHour', 'languages', 'media'));
    }
}
