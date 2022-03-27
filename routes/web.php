<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

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

Route::get('post/mypost', [PostController::class, 'mypost'])->name('post.mypost')->middleware(['auth']);
Route::get('post/mycomment', [PostController::class, 'mycomment'])->name('post.mycomment')->middleware(['auth']);
// create,showなど、PostControllerの７つのメソッドへのルーティングを設定する
Route::resource('post', PostController::class)->middleware(['auth']);

Route::post('post/comment/store', [CommentController::class, 'store'])->name('comment.store');

Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('profile/index', [ProfileController::class, 'index'])->name('profile.index');

require __DIR__.'/auth.php';
