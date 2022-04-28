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

// admin/article/view
Route::get('/', function () {
    return view('index');
});
//auth routes
Route::get('/register',function(){
  return view('register');
});
Route::get('/login',function(){
  return view('login');
});
Route::post('/user/register',[App\Http\Controllers\UserController::class,'store'])->name('user.register');
Route::post('/user/login',[App\Http\Controllers\UserController::class,'login'])->name('user.login');
Route::get('/logout',[App\Http\Controllers\UserController::class,'logout'])->name('logout');
//admin routes
Route::get('/admin',[App\Http\Controllers\HomeController::class,'index']);
//article routes
Route::get('admin/articles/list',[App\Http\Controllers\AdminController::class,'show'])->name('articles.list');
Route::get('admin/article/add',[App\Http\Controllers\AdminController::class,'index']);
Route::get('admin/article/edit/{id}',[App\Http\Controllers\AdminController::class,'edit'])->name('articles.edit');
Route::post('admin/article/destroy/{id}',[App\Http\Controllers\AdminController::class,'destroy'])->name('articles.destroy');
Route::post('admin/article/save',[App\Http\Controllers\AdminController::class,'store'])->name('article.store');
Route::post('admin/article/update/{id}',[App\Http\Controllers\AdminController::class,'update'])->name('article.update');

//scenario routes
Route::get('admin/scenario/list',[App\Http\Controllers\ScenariosController::class,'show'])->name('scenario.list');
Route::get('admin/scenario/add/{id}',[App\Http\Controllers\ScenariosController::class,'index'])->name('scenario.add');
Route::get('admin/scenario/edit/{id}',[App\Http\Controllers\ScenariosController::class,'edit'])->name('scenario.edit');
Route::post('admin/scenario/destroy/{id}',[App\Http\Controllers\ScenariosController::class,'destroy'])->name('scenario.destroy');
Route::post('admin/scenario/save',[App\Http\Controllers\ScenariosController::class,'store'])->name('scenario.store');
Route::post('admin/scenario/update/{id}',[App\Http\Controllers\ScenariosController::class,'update'])->name('scenario.update');

//content routes
Route::get('admin/content/list',[App\Http\Controllers\ContentController::class,'show'])->name('content.list');
Route::get('admin/content/add/{id}',[App\Http\Controllers\ContentController::class,'index'])->name('content.add');
Route::get('admin/content/edit/{id}',[App\Http\Controllers\ContentController::class,'edit'])->name('content.edit');
Route::post('admin/content/destroy/{id}',[App\Http\Controllers\ContentController::class,'destroy'])->name('content.destroy');
Route::post('admin/content/save',[App\Http\Controllers\ContentController::class,'store'])->name('content.store');
Route::post('admin/content/update/{id}',[App\Http\Controllers\ContentController::class,'update'])->name('content.update');

//interpretations routes
Route::get('admin/interpretations/list',[App\Http\Controllers\InterpretationController::class,'show'])->name('interpretations.list');
Route::get('admin/interpretations/add/{id}',[App\Http\Controllers\InterpretationController::class,'index'])->name('interpretations.add');
Route::get('admin/interpretations/edit/{id}',[App\Http\Controllers\InterpretationController::class,'edit'])->name('interpretations.edit');
Route::post('admin/interpretations/destroy/{id}',[App\Http\Controllers\InterpretationController::class,'destroy'])->name('interpretations.destroy');
Route::post('admin/interpretations/save',[App\Http\Controllers\InterpretationController::class,'store'])->name('interpretations.store');
Route::post('admin/interpretations/update/{id}',[App\Http\Controllers\InterpretationController::class,'update'])->name('interpretations.update');

//remedies routes
Route::get('admin/remedies/list',[App\Http\Controllers\RemediesController::class,'show'])->name('remedies.list');
Route::get('admin/remedies/add/{id}',[App\Http\Controllers\RemediesController::class,'index'])->name('remedies.add');
Route::get('admin/remedies/edit/{id}',[App\Http\Controllers\RemediesController::class,'edit'])->name('remedies.edit');
Route::post('admin/remedies/destroy/{id}',[App\Http\Controllers\RemediesController::class,'destroy'])->name('remedies.destroy');
Route::post('admin/remedies/save',[App\Http\Controllers\RemediesController::class,'store'])->name('remedies.store');
Route::post('admin/remedies/update/{id}',[App\Http\Controllers\RemediesController::class,'update'])->name('remedies.update');

//provision routes
Route::get('admin/provision/list',[App\Http\Controllers\ProvisionsController::class,'show'])->name('provision.list');
Route::get('admin/provision/add/{id}',[App\Http\Controllers\ProvisionsController::class,'index'])->name('provision.add');
Route::get('admin/provision/edit/{id}',[App\Http\Controllers\ProvisionsController::class,'edit'])->name('provision.edit');
Route::post('admin/provision/destroy/{id}',[App\Http\Controllers\ProvisionsController::class,'destroy'])->name('provision.destroy');
Route::post('admin/provision/save',[App\Http\Controllers\ProvisionsController::class,'store'])->name('provision.store');
Route::post('admin/provision/update/{id}',[App\Http\Controllers\ProvisionsController::class,'update'])->name('provision.update');
