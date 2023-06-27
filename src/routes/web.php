<?php
use App\Http\Controllers\HourController;
use App\Http\Controllers\ProfileController;
use App\Models\HourLanguage;
use App\Models\Hour;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';


// グループ化されたルートの定義
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HourController::class, 'index'])->name('dashboard');
    Route::get('/register' ,function() {
        return view('layouts.modal.register');
    }) ->name('register');
    Route::post('/dashboard/store', [HourController::class, 'store'])->name('dashboard.store');
});
