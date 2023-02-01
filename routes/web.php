<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\TemperatureController;
use App\Http\Controllers\TurbidityController;
use App\Http\Controllers\PhController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\HomeController;


Route::view('/','welcome');
//This routes return all pages from navbar.
Route::view('/aboutUs','aboutUs');
Route::view('/news','news');
Route::view('/shop','shop');
Route::view('/q&a','q&a');
Route::view('/contact','contact');
Route::view('/guide','guide');
Route::view('/accessDenied','accessDenied');
Route::view('/aboutUs-sensors','aboutUs-sensors');
Route::view('/aboutUs-application','aboutUs-application');

Route::get('/dashboard', function () {
    return view('/parameters');
})->middleware(IsUser::class)->name('dashboard');
Route::get('/admin/home', function () {
    return view('adminHome');
})->middleware([IsAdmin::class])->name('admin-dashboard');
require __DIR__.'/auth.php';
Route::controller(HomeController::class)->group(function(){
Route::get('redirects', 'index');
});

Route::controller(PostController::class)->group(function(){
    Route::get('admin/posts/index','index');
    Route::get('admin/posts/create','create');
    Route::get('admin/posts/{post}/edit','edit');
    Route::get('admin/posts/{post}','show');
    Route::post('post','store');
    Route::delete('admin/posts/{post}','destroy');
    Route::put('','update');
});

Route::get('admin/users/index',[UserController::class, 'index']);
Route::get('admin/home',[UserController::class, 'users']);

Route::controller(UserPostController::class)->group(function(){
    Route::get('user-post/index','index');
    Route::get('user-post/{post}','show');
    Route::get('news/{post}','show');
    Route::get('news','lastThree');
});

Route::controller(ContactController::class)->group(function(){
    Route::get('/contact','showForm');
    Route::post('/contact','storeForm')->name('contact.save');
});

Route::controller(ParameterController::class)->group(function(){
   Route::get('/parameters','table');
   Route::get('/trial','table');
   Route::post('/parameters','table');
});
Route::controller(TemperatureController::class)->group(function(){
    Route::get('/tempChart','tempTable');
    Route::get('/tempChartDay', 'tempChartDay');
    Route::get('/tempChartWeek', 'tempChartWeek');
    Route::get('/tempChartWeek', 'tempChartWeek');
    Route::get('/tempChartLast10Days', 'tempChartLast10Days');
    Route::get('/tempChartLast30Days', 'tempChartLast30Days');
    Route::get('/tempChartLast60Days', 'tempChartLast60Days');
 });
 Route::controller(TurbidityController::class)->group(function(){
    Route::get('/turbChart','turbTable');
    Route::get('/turbChartDay', 'turbChartDay');
    Route::get('/turbChartWeek', 'turbChartWeek');
    Route::get('/turbChartLast10Days', 'turbChartLast10Days');
    Route::get('/turbChartLast30Days', 'turbChartLast30Days');
    Route::get('/turbChartLast60Days', 'turbChartLast60Days');
 });
 Route::controller(PhController::class)->group(function(){
    Route::get('/phChart','phTable');
    Route::get('/phChartDay', 'phChartDay');
    Route::get('/phChartWeek', 'phChartWeek');
    Route::get('/phChartLast10Days', 'phChartLast10Days');
    Route::get('/phChartLast30Days', 'phChartLast30Days');
    Route::get('/phChartLast60Days', 'phChartLast60Days');
 });
 Route::controller(LevelController::class)->group(function(){
    Route::get('/waterLevelChart','levelTable');
    Route::get('/waterLevelChartDay', 'levelChartDay');
    Route::get('/waterLevelChartWeek', 'levelChartWeek');
    Route::get('/waterLevelChartLast10Days', 'levelChartLast10Days');
    Route::get('/waterLevelChartLast30Days', 'levelChartLast30Days');
    Route::get('/waterLevelChartLast60Days', 'levelChartLast60Days');
});

Route::fallback(function () {
    return view('pageNotFound');
});



