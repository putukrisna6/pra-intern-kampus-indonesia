<?php

use App\Core\Application\Usecases\CreateUserFromSocialite;
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
