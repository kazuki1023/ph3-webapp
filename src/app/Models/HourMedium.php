<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HourMedium extends Model
{
    use HasFactory;
    protected $table = 'hour_medium';
    public function hour()
    {
        return $this->belongsTo(Hour::class, 'time_id');
    }

    public function medium()
    {
        return $this->belongsTo(Medium::class, 'content_id');
    }

    public function scopeTotalHourByMedium($query)
    {
        return $query->select('media.id', 'media.content', DB::raw('SUM(hours.time) AS total_hour'))
            ->join('hours', 'hour_medium.time_id', '=', 'hours.id')
            ->join('media', 'hour_medium.content_id', '=', 'media.id')
            ->groupBy('media.id', 'media.content');
    }
}
