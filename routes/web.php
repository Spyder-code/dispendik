<?php

use App\Models\Institutional;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
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
    return view('visitor.index');
});

Route::get('/kelembagaan', function () {
    $data = Institutional::all();
    return view('visitor.kelembagaan', compact('data'));
});

Route::get('/galeri', function () {
    return view('visitor.galeri');
});

Route::get('/account', function () {
    $data = Institutional::all()->where('user_id', Auth::id());
    return view('visitor.account', compact('data'));
})->name('account');


Route::get('literatur', function () {
    $data = Teacher::all();
    return view('visitor.literatur', compact('data'));
});


Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('books', App\Http\Controllers\BookController::class);
    Route::resource('teachers', App\Http\Controllers\TeacherController::class);

});
Route::resource('institutionals', App\Http\Controllers\InstitutionalController::class);
