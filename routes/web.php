<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;   // 追記

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

//Route::get('/', function () {
//    return view('dashboard');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

// 以下追記 ---

// トップページはusers.indexとする
Route::get('/', [UsersController::class, 'index'])->name('home');

// 認証済みのときだけアクセスできるようにする
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('create', [UsersController::class, 'create'])->name('users.create');
        Route::get('mypage', [UsersController::class, 'mypage'])->name('users.mypage');
    });
}); 

// indexは認証済みじゃなくてもアクセスできるようにする
Route::get('users', [UsersController::class, 'index'])->name('users.index');

// その他呼び出し
Route::resource('users', UsersController::class);

require __DIR__.'/auth.php';
