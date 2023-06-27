<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $table = 'languages';
    public function hourLanguages()
    {
        return $this->hasMany(HourLanguage::class, 'language_id');
    }
}
