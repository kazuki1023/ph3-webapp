<?php

namespace App\Http\Controllers;
use App\Models\Hour;

use Illuminate\Http\Request;

class HourController extends Controller
{
    public function index()
    {
        $hourData = Hour::totalHourByDate()->get();
        return view('/dashboard', compact('hourData'));
    }
}
