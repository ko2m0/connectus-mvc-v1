<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BandbController;
use App\Http\Controllers\GuitarsController;
use App\Http\Controllers\MeetingController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/info', [HomeController::class, 'info'])->name('home.info');

Route::resource('guitars', GuitarsController::class);

Route::resource('bizandbreakfast', BandbController::class);


Route::get('/store', function () {
    
    $category = strip_tags(request('category')); 
    return 'you are viewing' . ($category);
});

Route::post('meeting', [MeetingController::class, 'store'])->name('meeting.store');

Route::get('meeting/show', [MeetingController::class, 'show'])->name('meeting.show');
