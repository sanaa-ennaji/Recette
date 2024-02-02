<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecepieController;



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

Route::get('/rece', function(){
    return view('recepies');
});

Route::get('/user', function(){
    return view('user');
});
// Route::get('/login', function(){
//     return view('login');
// });
// [a,b]  a controller class / b method 
// Route::post('/register', [UserController::class,'register' ]);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/create_recepie', [RecepieController::class, 'createrecepie']);

