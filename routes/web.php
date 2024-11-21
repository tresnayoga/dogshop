<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
})->name('home');

Route::get('/gallery', [ViewController::class, 'index']);
Route::get('/gallery/{id}', [ViewController::class, 'show']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});
Route::get('/sidebar', function () {
    return view('sidebar', [
        "title" => "About"
    ]);
});

Route::get('/login', [UserController::class, 'loginFrom'])->name('login');
Route::post('/login', [UserController::class, 'loginAction'])->name('login.action');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::resource('user', UserController::class);
Route::resource('post', PostController::class);
