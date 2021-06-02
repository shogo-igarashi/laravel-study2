<?php

use App\Http\Controllers\ContactFormController;
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
    return view('welcome');
});

//'middleware' => 'authで強制的にログイン画面へ遷移
Route::group(['prefix' => 'contact'], function(){
    Route::get('index', [ContactFormController::class,'index'])->name('contact.index');
    Route::get('create', [ContactFormController::class,'create'])->name('contact.create');
    Route::post('store', [ContactFormController::class,'store'])->name('contact.store');
    Route::get('show/{id}', [ContactFormController::class,'show'])->name('contact.show');

});
//REST
//Route::resource('contacts', 'ContactFormController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
