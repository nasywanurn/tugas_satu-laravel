<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('layouts.index');
// })->name('index');

// Route::get('/about', function () {
//     return view('layouts.about');
// })->name('about');

// Route::get('/post', function () {
//     return view('layouts.post');
// })->name('post');

// Route::get('/contact', function () {
//     return view('layouts.contact');
// })->name('contact');


Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        return view('admin.index');
    });
});

