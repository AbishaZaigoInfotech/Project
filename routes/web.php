<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users;

use App\Http\Controllers\UserController;

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
    // return redirect('about');
});

// Passing data with routing

// Route::get('/{name}', function ($name) {
//     return view('welcome', ['name'=>$name]); 
// });

// Route :: post('users',[Users::class,'getData']);
// Route :: view('login', 'users');

// Route :: get('users',[Users::class,'getData']);

Route :: get('users',[UserController::class,'index']);
Route :: post('index',[UserController::class,'store'])->name('store');
Route :: post('users',[UserController::class,'index'])->name('index');

Route :: view('about', 'about');

Route::get('/contact', function () {
    return view('contact');
});

// Route :: view('user', 'user');
// Route :: view('home', 'home');
// Route :: view('noaccess', 'noaccess');

// Grouped middleware
// Route::group(['middleware'=>['protectedPages']], function(){
//     Route :: view('user', 'user');
// });

//Route middleware
// Route :: view('user', 'user')->middleware('protectedPages');