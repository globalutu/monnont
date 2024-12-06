<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan; // Importer Artisan
use App\Http\Controllers\PageController;

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

Route::get('/cach', function () {
    Artisan::call('config:cache');
});

Route::get('/', [PageController::class, 'index'])->name('sev');
Route::get('/index', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/Services', [PageController::class, 'Services'])->name('Services');
Route::get('/Contact', [PageController::class, 'Contact'])->name('Contact');

Route::fallback(function () {
    return view('vendor.error.404');
});

use App\Http\Controllers\NewsletterController;

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');