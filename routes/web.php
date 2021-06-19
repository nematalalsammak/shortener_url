<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\ShortLinkController;

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

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/dashboard',[UrlController::class, 'index'])
->middleware(['auth'])
->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/index', [UrlController::class, 'index'])->name('index');
Route::get('/create', [UrlController::class, 'create'])
->middleware(['auth'])->name('create');
Route::post('/create', [UrlController::class, 'store'])->name('store');
Route::get('{code}', [UrlController::class,'shortenLink'])->name('shorten.link');


