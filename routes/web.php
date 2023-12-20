<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

/*Route::get('/', function () {
    return view('index');

});
/*Route::get('/{city}', function (Request $request, $city) {
    $city = $request->input('city');
    return view('index');
});*/
Route::get('/', function () {
    return view('index');
});

Route::get('/?city={city}', function ($city) {
    return view('index', compact('city'));
})->where('city','[a-z0-9\-]+')->name('{city}');
Route::get('/?country={country}', function ($country) {
    return view('index', compact('country'));
})->where('country','[a-z0-9\-]+')->name('{country}');
