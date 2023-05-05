<?php

use App\Events\FormSubmitted;
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

Route::get('/counter', function () {
    return view('counter');
});

Route::get('/sender', function () {
    return view('sender');
});

Route::post('/sender', function () {
    //post
    $text = request()->text;
    event(new FormSubmitted($text));
});
