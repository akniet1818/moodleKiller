<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;

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

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/tasks', 'App\Http\Controllers\TasksController@index');
Route::get('/tasks/{task}', 'App\Http\Controllers\TasksController@show');

Route::get('/notregged', function (){
    return view('pages.index_notregged');
});

//ПРЕДМЕТЫ
Route::get('/courses/english', 'App\Http\Controllers\PagesController@english');
Route::get('/courses/web2', 'App\Http\Controllers\PagesController@web2');
Route::get('/courses/ads', 'App\Http\Controllers\PagesController@ads');
Route::get('/courses/calculus', 'App\Http\Controllers\PagesController@calculus');
Route::get('/courses/codlab', 'App\Http\Controllers\PagesController@codlab');
Route::get('/courses/pc', 'App\Http\Controllers\PagesController@pc');

//GRADES ТАБЛИЦЫ ПРЕДМЕТОВ
Route::get('/courses/english/grades', 'App\Http\Controllers\PagesController@english_grades');
Route::get('/courses/web2/grades', 'App\Http\Controllers\PagesController@web2_grades');
Route::get('/courses/ads/grades', 'App\Http\Controllers\PagesController@ads_grades');
Route::get('/courses/calculus/grades', 'App\Http\Controllers\PagesController@calculus_grades');
Route::get('/courses/codlab/grades', 'App\Http\Controllers\PagesController@codlab_grades');
Route::get('/courses/pc/grades', 'App\Http\Controllers\PagesController@pc_grades');

//ПРОФИЛИ
Route::get('/profile', 'App\Http\Controllers\PagesController@profile');
Route::get('/profile/zaur', 'App\Http\Controllers\PagesController@profile');
Route::get('/profile/umar', 'App\Http\Controllers\PagesController@profile_umar');
Route::get('/profile/akniet', 'App\Http\Controllers\PagesController@profile_akniet');

//КНОПКА COURSES
Route::get('/courses/grades', 'App\Http\Controllers\PagesController@grades');
Route::get('/courses/attendance', 'App\Http\Controllers\PagesController@attendance');
Route::get('/courses/schedule', 'App\Http\Controllers\PagesController@schedule');
Route::get('/info', 'App\Http\Controllers\PagesController@info');
