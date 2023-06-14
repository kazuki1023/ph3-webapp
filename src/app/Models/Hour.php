<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    use HasFactory;
    public function hourLanguages()
    {
        return $this->hasMany(HourLanguage::class, 'hour_id');
    }
}
