<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[BlogController::class, 'index']);
// Route::get('/isi_post', function () {
//     return view('blog.isi_post');
// });
Route::get('/isi_post/{slug}',[BlogController::class, 'isi_blog'])->name('blog.isi');
Route::get('/list_post',[BlogController::class, 'list_blog'])->name('blog.list');
Route::get('/list_category/{category}',[BlogController::class, 'list_category'])->name('blog.category');
Route::get('/cari',[BlogController::class, 'cari'])->name('blog.cari');

Route::middleware('auth')->group(function(){
	Route::get('/home', function () {
    return view('home');
    })->name('home');
	Route::resource('/category','CategoryController');
	Route::resource('/tag','TagController');
	Route::get('/post/tampil_hapus',[PostController::class, 'tampil_hapus'])->name('post.tampil_hapus');
	Route::get('/post/restore/{id}',[PostController::class, 'restore'])->name('post.restore');
	Route::delete('/post/kill/{id}',[PostController::class, 'kill'])->name('post.kill');
	Route::resource('/post','PostController');
	Route::resource('user', 'UserController');

});


Route::get('/login',[AuthController::class, 'showLogin'])->name('login');
Route::post('/login',[AuthController::class, 'loginProcess']);
Route::get('/logout',[AuthController::class, 'logout']);

Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/login', function () {
    return view('login');
});