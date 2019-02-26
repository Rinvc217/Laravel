<?php

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
Route::get('/show', function () {
    return view('show');
});

Route::post('/show', function (Illuminate\Http\Request $request) {
    $giaTri1 = $request->giatri1;
    $giaTri2 = $request->giatri2;
    $giaTri3 = $request->giatri3/100;
    $ketqua = $giaTri2*$giaTri3*0.1;
    return view('display-discount',compact(['giaTri1','giaTri2','giaTri3','ketqua']));
});



