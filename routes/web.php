<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::group(['namespace' => 'App\Http\Controllers'], function() {
    /**
     * Home Routes
     */
    Route::get('/', [StudentController::class, 'index'])->name('home');

    Route::group([
        'prefix' => 'student',
        'middleware' => ['guest']
    ], function() {

        Route::get('/edit/{id}', [StudentController::class, 'editStudent'])->where('id', '[0-9]+');

        Route::post('/editStudent/{id}', [StudentController::class, 'update'])->where('id', '[0-9]+');
        Route::get('/', [StudentController::class, 'showList']);

        Route::get('/viewDetails/{id}',  [StudentController::class, 'display'])->where('id', '[0-9]+');

        Route::get('/createStudent', [StudentController::class, 'createStudent']);
        Route::post('/create', [StudentController::class, 'create']);

        Route::get('/search',[StudentController::class,'searchStudent'])->name('student.search');

        Route::delete('/delete/{id}',  [StudentController::class, 'deleteStudent'])->where('id', '[0-9]+');
    });
});
