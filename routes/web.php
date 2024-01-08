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

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'users';
    });

    Route::get('/users/{id}', function ($id) {
        return 'users id: '. $id;
    });
});

Route::get('/user', [\App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('/user/pract', [\App\Http\Controllers\UserController::class, 'pract'])->name('user.pract');
Route::get('/user/all', [\App\Http\Controllers\UserController::class, 'all'])->name('user.all');
Route::get('/user/{name}', [\App\Http\Controllers\UserController::class, 'name'])->name('user.name');
Route::get('/user/{name}/{surname}', [\App\Http\Controllers\UserController::class, 'fullname'])->name('user.fullname');
Route::prefix('articles')->group(function () {
    Route::get('/', [\App\Http\Controllers\ArticleController::class, 'show']);
});

Route::prefix('post')->group(function () {
    Route::get('show/{id?}', [\App\Http\Controllers\PostController::class, 'show'])
        ->name('post.show')->where('id', '\d+');
});

//Route::get('/test', function () {
//    return 'test message!';
//});
//
//Route::get('/user/', function () {
//    return 'user';
//});
//Route::get('/user/all', function () {
//    return 'all';
//});
//Route::get('/user/{id?}', function ($id = null) {
//    return 'id: '. $id;
//});

//Route::get('/dir/test', function () {
//    return 'test message dir!';
//});
//
//Route::get('/users/{slug}', function ($slug) {
//    return 'User slug: ' . $slug;
//});
//
//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'User name: ' . $id . " " . $name;
//})->where('id', '\d+')->where('name', '[a-z]{2,}');
//
//Route::get('/city/{city?}/', function ($city = 'Kyiv') {
//    return 'City name: ' . $city;
//})->whereAlpha('city');
//
//Route::get('/posts/{date}/', function ($date) {
//    return 'Posts date: ' . $date;
//})->where('date','\d{4}\-(\d|0[1-9]|1[012])\-([1-9]|[12][\d]|3[01])');
