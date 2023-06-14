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
        return $this->hasMany(HourLanguage::class, 'hour_id');
    }

    public function scopeTotalHourByDate($query)
    {
        return $query->select(DB::raw('DATE(date) AS date'), DB::raw('SUM(hour) AS total_hour'))
            ->groupBy('date')->orderBy('date','asc');
    }
}
