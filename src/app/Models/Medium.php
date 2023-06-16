<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medium extends Model
{
    use HasFactory;
    public function hourMedium()
    {
        return $this->hasMany(HourMedium::class, 'content_id');
    }
}
