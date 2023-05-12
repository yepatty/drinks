<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//-------------------------------------------------------------------------------

Route::get('/test', function (Request $request) {
    echo Auth::user();
    die();
});


// 首頁
Route::get('/index', function () {
    return view('home');
});

// 最新消息
Route::get('/news', NewsController::class);
Route::get('/news_01', [NewsController::class, 'del01st']);
Route::get('/news_02', [NewsController::class, 'del02nd']);
Route::get('/news_03', [NewsController::class, 'del03rd']);
Route::get('/news_04', [NewsController::class, 'del04th']);
Route::get('/news_05', [NewsController::class, 'del05th']);
Route::get('/news_06', [NewsController::class, 'del06th']);
Route::get('/news_07', [NewsController::class, 'del07th']);
Route::get('/news_08', [NewsController::class, 'del08th']);
Route::get('/news_09', [NewsController::class, 'del09th']);
Route::get('/news_10', [NewsController::class, 'del10th']);

// 商品
Route::get('/products', ProductsController::class);
Route::get('/tea', [ProductsController::class, 'tea']);
Route::get('/mktea', [ProductsController::class, 'milktea']);
Route::get('/milk', [ProductsController::class, 'milk']);
Route::get('/specials', [ProductsController::class, 'specials']);

// 門市
Route::get('/shops', ShopsController::class);

//訂單
Route::get('/order', ListController::class);
Route::post('/receipt', [ListController::class, 'receipt']);


Route::view('/receipt', '04-02-info');
Route::get('/query', [ListController::class, 'query']);




require __DIR__.'/auth.php';
