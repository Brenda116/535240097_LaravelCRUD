<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;
use App\http\Controllers\homeController;

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

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/{id}', [UserController::class, 'show']);

//Route::get('/', [homeController::class, 'index']);
//Route::get('/', [homeController::class, 'getName']);

Route::get('/',[homeController::class, 'index']);

//Modul Praktikum Back-End (Laravel praktik.pdf)
//Parameter Tunggal
Route::get('/user/{id}', function($id) {
    echo 'User ID : '. $id;
});

//Parameter Opsional
Route::get('/user/{name?}', function($name='Brenda') {
    return view('Hello, ', ['name' => $name]);
});

//Multiple Parameter
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    echo 'Post ID: ' . $postId . ', Comment ID: ' . $commentId;
});

//Parameter dengan Constraint
Route::get('/user/{id}', function ($id) {
    echo 'User ID : ' . $id;
})->where('id', '[0-9]+');

Route::get('/about', function () {
    return view('about');
});

// Route::get('/mahasiswa', function () {
//     echo 'mahasiswa';
// });

//memastikan hanya pengguna yang sudah terautentikasi (login) saja yang boleh mengakses URL–URL di bawah ini

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
