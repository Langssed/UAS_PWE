<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HubungiKamiController;

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
    return view('home');
});

Route::get('/tentang-kami', function () {
    return view('tentangkami');
});

Route::get('/hubungi-kami', function () {
    return view('hubungikami');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/layanan-kami', function () {
    return view('layananKami');
});

Route::get('/daftar-online', function () {
    return view('daftarOnline');
});

Route::post('/hubungi-kami', [HubungiKamiController::class, 'store']);