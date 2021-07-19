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

//Route welcome that returns a view 
Route::get('/{nimp}', function ($nimp) {

    return view('welcome',compact('nimp'));
});


Route::get('/andy', function () {
    $nom= '<h2>Je me nomme andy</h2>';
    return $nom;
});


