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
    return view('welcome');
});
//////////////////////////////////////////////////
Route::get('/pizza', function () {

    $price=request('price');
    $size=request('size');
    return view('pizza',[
        'type' => 'Shar2y',
        'price' => $price,
        'size'  => $size
]);
});
////////////////////////////////////////////////////
Route::get('/pizza/{id}',function($id){
    return view('details',['id'=>$id]);


});

////////////////////////////////////////////////////
// Route::view('', 'viewName');
Route::view('about-me', 'about',[
    'page_name' => "About Page",
    'page_description' =>"this is about page"
])->name("about");
//////////////////////////////////////////////////////
// Route::get('/about', function () {
//     return view('about',[
//         'page_name' => "About Page",
//         'page_description' =>"this is about page"
//     ]);
// });
//////////////////////////////////////////////////////
Route::get('/contact', function () {
    return view('contact');
});