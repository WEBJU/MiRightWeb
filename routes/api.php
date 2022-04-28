<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//auth api
Route::get('/articles',[App\Http\Controllers\ApiController::class,'index']);
//content api
Route::get('article/provision/{id}',[App\Http\Controllers\ApiController::class,'show']);

Route::get('/content',[App\Http\Controllers\ApiController::class,'content']);
Route::get('/search/{name}',[App\Http\Controllers\ApiController::class,'search']);
// Route::middleware(['middleware'=>['cors','json.response']], function (Request $request) {
//     // return $request->user();
//     // public routes
//     Route::post('/login', [App\Http\Controllers\ApiController::class,'login'])->name('login.api');
//     Route::post('/register',[App\Http\Controllers\ApiController::class,'register'])->name('register.api');
// });
Route::post('/login', [App\Http\Controllers\ApiController::class,'login'])->name('login.api');
Route::post('/register',[App\Http\Controllers\ApiController::class,'register'])->name('register.api');
// Route::middleware('auth:api')->group(function(){
//   Route::post('/logout', [App\Http\Controllers\ApiController::class,'logout'])->name('logout.api');
//
// });
// Route::get('/register',[App\Http\Controllers\ApiController::class,'index']);
// Route::get('/login',[App\Http\Controllers\ApiController::class,'index']);
// Route::get('articles',[App\Http\Controllers\ApiController::class,'index']);
// Route::get('article/content{id}',[App\Http\Controllers\ApiController::class,'index']);
