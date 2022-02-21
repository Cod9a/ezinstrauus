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
})->name('index');

Route::get('/cabinets/{cabinet}', function ($cabinet) {
    if(!isset($cabinet))
        return redirect()->route('index');
    return view('pages.cabinetDetails', compact('cabinet'));
})->name('cabinet');

Route::get('/services/{service}', function ($service) {
    if(!isset($service))
        return redirect()->route('service');
    return view('pages.serviceDetails', compact('service'));
})->name('serviceDetails');

Route::get('/contactez-nous', function () {
    return view('pages.contact');
})->name('contact');
