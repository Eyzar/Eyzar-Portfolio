<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SubjectController;
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

Route::get('/home', function () {
    return view('home');
})->middleware('isLogin');


Route::get('/session', [SessionController::class, 'index']);
Route::post('/session/login', [SessionController::class, 'login']);
Route::get('/session/logout', [SessionController::class, 'logout']);
Route::get('/session/register', [SessionController::class, 'register']);
Route::post('/session/create', [SessionController::class, 'create']);
Route::get('/profile/{email?}', [ProfileController::class, 'show'])->name('profile')->middleware('auth');

Route::get('/landing-page', function () {
    return view('landing-page');
});

// Route::get('/course', [CourseController::class, 'index']);
// Route::get('/course/subject/bab', [CourseController::class, 'show']);

/*
Route::get('/course/subject', function(){
    return view('Mapel');
});
*/

Route::get('/course', [ClassController::class, 'index']);
Route::get('/course/{subject_id}/{class_id}', [ClassController::class, 'show']);
Route::get('/course/{subject_id}/{class_id}/video', [ClassController::class, 'content']);


Route::get('/profile2', function(){
    return view('profile2');
});

Route::redirect('/' , '/landing-page');