<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', [dashboardController::class,'index']);

Route::get('/', [dashboardController::class,'home']);

Route::get('/add', [dashboardController::class,'addProducts'])->name('add');

Route::get('/all', [dashboardController::class,'allProducts'])->name('all');
Route::get('/category', [dashboardController::class,'category'])->name('category');

Route::POST('/add', [productController::class,'products'])->name('addproduct');
Route::POST('/category', [productController::class,'category'])->name('addcategory');
Route::get('/all', [productController::class,'allProducts'])->name('all');
Route::get('/update/{id}', [productController::class,'edit'])->name('edit');
Route::POST('/update/{id}', [productController::class,'update'])->name('update');

Route::DELETE('/all/{id}', [productController::class,'destroy'])->name('delete');
