<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Medium;
use App\Models\Hour;
use App\Models\HourLanguage;
use App\Models\HourMedium;
use Illuminate\Support\Facades\Validator;

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
            foreach($request->lang as $lang)
                HourLanguage::create([
                    'time_id' => Hour::latest()->value('id'),
                    'name_id' => $lang,
                ]);
            foreach($request->media as $media)
                HourMedium::create([
                    'time_id' => Hour::latest()->value('id'),
                    'content_id' => $media,
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
