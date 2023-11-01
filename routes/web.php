<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/testimony', function () {
    return view('testimony');
})->name('testimony');

Route::get('locale/{locale}', function ($locale) {
    session()->put('locale', $locale);

    return Redirect::back();
});
Route::get('resources', [ResourceController::class, 'index'])->name('resources');

Route::post('contact/form', [InfoController::class, 'contact'])->name('contact.form');
