<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;


// Route::get('/product',
//  [ProductsController::class, 'index'])->name('kalia');

//  Route::get('/', 
//     function(){
//         return view('welcome');
//     })->name('kutta');

// Route::get('/', [PagesController::class, 'index'] );
Route::get('/about', [PagesController::class, 'about']);