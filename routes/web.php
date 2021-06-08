<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
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
Route::get('/about',[AboutController::class, 'index' ])->name('about');
Route::get('/contact',[ContactController::class, 'index' ])->name('contact');

//category Route start
Route::get('/all/category',[CategoryController::class,'AllCat'])->name('all.cat');
Route::post('/category/store',[CategoryController::class,'AddCat'])->name('store.category');
//category Route end

Route::get('/test', function () {
    return view('pages.test');
})->middleware('age');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function ()
{
    $users = User::all();
//    $users =DB::table('categories')->get();
    return view('dashboard',compact('users'));
})->name('dashboard');
