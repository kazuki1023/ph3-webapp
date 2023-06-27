<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Hour extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'date',
        'time',
    ];
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
        return $query->select(DB::raw('DATE(date) AS date'), DB::raw('COALESCE(SUM(time), 0) AS total_hour'))
        ->whereDate('date', now())
        ->groupBy('date');
    }

    // 今月の勉強時間を取得する
    public function scopeTotalHourCurrentMonth($query)
    {
        return $query->selectRaw('SUM(time) as total_hour')
            ->whereYear('date', '=', Carbon::now()->format('Y'))
            ->whereMonth('date', '=', Carbon::now()->format('m'))
            ->first()
            ->total_hour;
    }

    // これまでの学習時間を取得する
    public function scopeTotalHour($query)
    {
        return $query->selectRaw('SUM(time) as total_hour')
            ->first()
            ->total_hour;
    }
}
