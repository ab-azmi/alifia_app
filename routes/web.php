<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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
    return view('landing.index');
})->name('landing');

Route::get('/landing-tentang', function () {
    return view('landing.tentang');
})->name('landing-tentang');

Route::get('/landin-konseling', function () {
    return view('landing.konseling');
})->name('landing-konseling');

Route::get('/landing-psikolog', function () {
    return view('landing.psikolog');
})->name('landing-psikolog');

Route::get('/landing-riwayat', function () {
    return view('landing.riwayat');
})->name('landing-riwayat');

Route::get('/booking/{psikolog}', function () {
    return view('landing.booking');
})->name('booking');

Route::post('/book-test', function(Request $request) {
    dd($request->all());
})->name('book-test');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
