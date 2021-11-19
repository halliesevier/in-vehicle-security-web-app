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

Route::get('/result', function () {
    return view('jobs.result');
})->name('result');

Route::get(
    '/result/2',
    function () {
        return view('jobs.download');
    }
)->name('result.2');

Route::get('/jobs', 'App\Http\Controllers\JobController@index')->name('jobs');
Route::get('/jobs/create', 'App\Http\Controllers\JobController@create')->name('jobs.create');
Route::post('/jobs', 'App\Http\Controllers\JobController@store')->name('jobs.store');
