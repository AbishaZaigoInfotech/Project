<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users;

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

Route :: post('users',[Users::class,'getData']);
Route :: view('login', 'users');

Route :: view('about', 'about');

Route::get('/contact', function () {
    return view('contact');
});