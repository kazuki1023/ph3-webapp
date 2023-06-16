<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HourLanguage extends Model
{
    // 中間テーブル作成
    protected $table = 'hour_language';
    public $timestamps = true;
    use HasFactory;

    public function hour()
    {
        return $this->belongsTo(Hour::class, 'time_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'name_id');
    }

    public function scopeTotalHourByLanguage($query)
    {
        return $query->select('languages.id', 'languages.name', DB::raw('SUM(hours.time) AS total_hour'))
            ->join('hours', 'hour_language.time_id', '=', 'hours.id')
            ->join('languages', 'hour_language.name_id', '=', 'languages.id')
            ->groupBy('languages.id', 'languages.name');
    }
}
