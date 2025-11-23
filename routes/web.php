<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', function () {
//     return view('post');
// });


// route::view('post','/post');


Route::get('/hello', function () {
    return view('post');
});


Route::get("/test",\App\Http\controllers\Testcontroller::class);
Route::get("/test/one",[\App\Http\controllers\Testcontroller::class,"testingOne"]);


?>