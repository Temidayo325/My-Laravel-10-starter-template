<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/assessment', function () {
    return view('components.assessment');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [App\Http\Controllers\StudentController::class, 'create']);
Route::get('/assessment', [App\Http\Controllers\StudentController::class, 'loadQuestions']);
Route::get('/questions', function(){
	return view('questions');
});