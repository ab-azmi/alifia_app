<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Chat\Chat;
use App\Livewire\Chat\Index;
use App\Livewire\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PsikologController;
use App\Http\Controllers\KonselingController;

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

Route::get('/landing-psikolog', [PsikologController::class, 'index'])->name('landing-psikolog');

// Route::get('/landing-riwayat', function () {
//     return view('landing.riwayat');
// })->name('landing-riwayat');

// Route::get('/booking/{psikolog}', function () {
//     return view('landing.booking');
// })->name('booking');

Route::get('/landing-riwayat', [KonselingController::class, 'index'])->name('landing-riwayat');

// Route::post('/book-test', function(Request $request) {
//     dd($request->all());
// })->name('book-test');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/chat', Index::class)->name('chat.index');
    Route::get('/chat/{query}',  Chat::class)->name('chat');
    Route::get('/users',  Users::class)->name('users');

    Route::get('/booking/{id}', [KonselingController::class, 'create'])->name('booking');
    Route::post('/booking-store/{id}', [KonselingController::class, 'store'])->name('booking-store');
});


require __DIR__ . '/auth.php';
