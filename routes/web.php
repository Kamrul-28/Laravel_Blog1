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
    return view('content');
});

Route::get('/about', function () {
   
    $articals=App\artical::all();
    return view('about',
    ['articals'=>$articals]


);
});




//Route::get('/articals/{articals}','Articalscontroller@index');

Route::get('/articals/create','Articalscontroller@create');

Route::post('/articals','Articalscontroller@store');

Route::get('/articals/{articals}','Articalscontroller@show');
