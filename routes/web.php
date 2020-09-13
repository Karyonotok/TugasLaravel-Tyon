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

Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    $nama = 'Digna Kurnia Lestari!';
    return view('about', ['nama' => $nama]);
});

// Closure
    Route::get('/profil', function () {
        return "Ini adalah profil siswa";

    })->name('profil');

// Route name
    Route::get("/tesname", function () {
        return route('profil');
    });

// Parameter
    Route::get('/profil/{id}', function($id) {
        return $id;

    });

// Controller
    Route::get('/cobacontroller', "CobaController@show");


// Resource
    Route::resource('siswa', "SiswaController");

