<?php

use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadController;
use App\Services\PaymentGateway\Payment;
use Illuminate\Support\Facades\App;
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
    return view('welcome');
});

Route::get('/local/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('localization');
});


Route::get('/posts',[PaginationController::class,'allPosts']);


Route::get('/home', function(){
    return view('index');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/upload',[UploadController::class, 'uploadForm'])->name('upload.uploadform');

Route::post('/upload',[UploadController::class, 'uploadFile'])->name('upload.uploadfile');

Route::get('/payment', function(){
    return Payment::process();
});
