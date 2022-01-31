<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;
use App\Models\Recipes;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/categorias1',[CategoryController::class, 'index'])->name('category.index');
Route::get('categorias1/{id}',[CategoryController::class,'show'])->name('category.show');


Route::get('/recipe',[RecipesController::class,'index'])->name('recipe.index');
Route::get('recipe/{id}',[RecipesController::class,'show'])->name('recipe.show');