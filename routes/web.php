<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecepieController;

use App\Models\Recepie;


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
   $recepies = recepie::all();
    return view('recepies',['recepies'=>$recepies]);
});

Route::get('/user', function(){
 // $recepies = recepie::where('user_id' , auth()->id())->get();
    $recepies = [];
    if(auth()->check()) {
        $recepies = auth()->user()->userRecepies()->latest()->get();
    }
    return view('user',['recepies'=>$recepies]);
});

// [a,b]  a controller class / b method 
// Route::post('/register', [UserController::class,'register' ]);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/create_recepie', [RecepieController::class, 'createrecepie']);
Route::get('/edit-recepie/{recepie}',[ RecepieController::class , 'showEdit']);
Route::put('/edit-recepie/{recepie}',[ RecepieController::class , 'updatedRecepies']);
Route::delete('/delete-recepie/{recepie}',[ RecepieController::class , 'deleteRecepie']);
Route::get('/search',[RecepieController::class , 'search']);
