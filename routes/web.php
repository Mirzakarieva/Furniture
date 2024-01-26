<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;

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
//    return view('welcome');
//});
Route::get("/", [pagesController::class,'index']) ;
Route::get("/get", [pagesController::class,'get']) ;
Route::post("/create", [pagesController::class,'create']) ;
Route::post("/contacts", [pagesController::class,'contacts']) ;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', function(){
        return view('admin.layouts.dashboard'); 
    });
    
    Route::prefix('products')->group(function(){
        Route::get('index', [ProductController::class, 'index']);
        Route::get('create', [ProductController::class, 'create']);
        Route::post('store', [ProductController::class, 'store']);
        Route::get('show/{id}', [ProductController::class, 'show']);
        Route::get('edit/{id}', [ProductController::class, 'edit']);
        Route::put('update/{id}', [ProductController::class, 'update']);        
        Route::delete('delete/{id}', [ProductController::class, 'delete']);        
    });

    Route::prefix('clients')->group(function(){
        Route::get('index', [ClientController::class, 'index']);
        Route::get('show/{id}', [ClientController::class, 'show']);      
        Route::delete('delete/{id}', [ClientController::class, 'delete']);        
    });
});