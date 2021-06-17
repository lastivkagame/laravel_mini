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

use App\Http\Controllers\MainController;

Route::get('/',  [MainController::class,'home']);
Route::get('/about',  [MainController::class,'about']);

Route::get('/review',  [MainController::class,'review']);
Route::post('/review/check',  [MainController::class,'review_check']);


//Route::get('/about', 'MainController@about');

/*Route::get('/', function () {
    return view('home');
});*/

/*Route::get('/about', function () {
    return view('about');
});*/
/*
Route::get('/user/{id}/{firstName}', function ($id, $firstName) {
    return 'ID: ' . $id . ' name: ' . $firstName;//view('about');
});*/
