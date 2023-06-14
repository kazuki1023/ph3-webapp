<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HourLanguage extends Model
{
    // 中間テーブル作成
    protected $table = 'hour_language';
    public $timestamps = true;

    public function hour()
    {
        return $this->belongsTo(Hour::class, 'hour_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
}
