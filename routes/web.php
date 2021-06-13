<?php

use App\Core\Application\Usecases\CreateUserFromSocialite;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\ProvinsiController;
use App\Models\Kota;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home')->middleware('auth')->name('home');

Route::get('/login/google/redirect', function() {
    return Socialite::driver('google')->redirect();
})->name('login.google.redirect');


Route::get('/login/google/callback', function() {
    $user = Socialite::driver('google')->user();

    (new CreateUserFromSocialite)->execute($user);
    return redirect()->route('home');
});

Route::prefix('pendataan')->group(function() {
    Route::get('/', [PendataanController::class, 'index'])->name('pendataan');

    Route::prefix('provinsi')->group(function() {
        Route::get('/index', [ProvinsiController::class, 'index']);
        Route::get('/create', [ProvinsiController::class, 'create']);
        Route::post('/', [ProvinsiController::class, 'store']);
    });

    Route::prefix('kota')->group(function() {
        Route::get('/index', [KotaController::class, 'index']);
        Route::get('/create', [KotaController::class, 'create']);
        Route::post('/', [KotaController::class, 'store']);
    });

    Route::prefix('kampus')->group(function() {
        Route::get('/index', [KampusController::class, 'index']);
        Route::get('/create', [KampusController::class, 'create']);
        Route::post('/', [KampusController::class, 'store']);
    });
});


Route::get('/change-password', [ChangePasswordController::class, 'index']);
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');
