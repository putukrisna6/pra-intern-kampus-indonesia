<?php

use App\Http\Controllers\FormInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/kelurahan/{id_kecamatan}', [ApiTestController::class, 'getKelurahan'])->name('get.kelurahan');

Route::get('/kota/{id_provinsi}', [FormInfoController::class, 'getKotaKabupaten'])->name('get.kotakabupaten');
