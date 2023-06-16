<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Hour extends Model
{
    use HasFactory;
    public function hourLanguages()
    {
        return $this->hasMany(HourLanguage::class, 'time_id');
    }

    public function hourMedium()
    {
        return $this->hasMany(HourMedium::class, 'time_id');
    }

    public function scopeTotalHourByDate($query)
    {
        return $query->select(DB::raw('DATE(date) AS date'), DB::raw('SUM(time) AS total_hour'))
            ->groupBy('date')->orderBy('date','asc');
    }
    // 今日の日付を取得して、今日の勉強時間を取得する
    public function scopeTodayHour($query)
    {
        return $query->select(DB::raw('DATE(date) AS date'), DB::raw('SUM(time) AS total_hour'))->whereDate('date', now())
        ->groupBy('date')->orderBy('date','asc');
    }
}
