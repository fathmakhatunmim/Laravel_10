<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
})->name('mypost');


Route::get('/test', function () {
    return view('about');
});


Route::redirect('/about','/test',301);//301 parmanent redirect





// Route::get('/post', function () {
//     return view('post');
// });

//parameter
// Route::get('/post/{id}', function (string $id) {
//     return "<h1>Post ID : " . $id ."</h1>";
// });


//optional parameter
// Route::get('/post/{id?}', function (string $id = null) {
//     if($id){
//            return "<h1>Post ID : " . $id ."</h1>";
//     }
//     else{
//              return "<h1>No id found</h1>";
//     }
// });

//multiple parameter
// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null,string $comment=null) {
//     if($id){
//            return "<h1>Post ID : " . $id ."</h1><h2> Comment ID:".$comment."</h2>";
//     }
//     else{
//              return "<h1>No id found</h1>";
//     }
// });

//constraints

// Route::get('/post/{id}', function (string $id = null) {
//     if($id){
//            return "<h1>Post ID : " . $id ."</h1>";
//     }
//     else{
//              return "<h1>No id found</h1>";
//     }
// })->whereNumber('id');




// route::view('/post','post');





Route::get("/test",\App\Http\controllers\Testcontroller::class);
Route::get("/test/one",[\App\Http\controllers\Testcontroller::class,"testingOne"]);


?>