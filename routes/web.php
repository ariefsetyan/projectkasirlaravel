<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/builder', [App\Http\Controllers\BuilderController::class, 'index'])->name('builder');
Route::post('/builder/create', [App\Http\Controllers\BuilderController::class, 'create'])->name('builder.create');

//Route::group(['middleware' => ['auth']], function() {
//    Route::resource('roles', RoleController::class);
//    Route::resource('users', UserController::class);
//    Route::resource('products', ProductController::class);
//});

Route::get('products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products.index');
Route::get('products/create', [App\Http\Controllers\ProductsController::class, 'create'])->name('products.create');
Route::post('products/store', [App\Http\Controllers\ProductsController::class, 'store'])->name('products.store');
Route::get('products/show/{id}', [App\Http\Controllers\ProductsController::class, 'show'])->name('products.show');
Route::get('products/edit/{id}', [App\Http\Controllers\ProductsController::class, 'edit'])->name('products.edit');
Route::post('products/update/{id}', [App\Http\Controllers\ProductsController::class, 'update'])->name('productsupdate');
Route::get('products/destroy/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('products.delete');
Route::get('roles', [App\Http\Controllers\RolesController::class, 'index'])->name('roles.index');
            Route::get('roles/create', [App\Http\Controllers\RolesController::class, 'create'])->name('roles.create');
            Route::post('roles/store', [App\Http\Controllers\RolesController::class, 'store'])->name('roles.store');
            Route::get('roles/show/{id}', [App\Http\Controllers\RolesController::class, 'show'])->name('roles.show');
            Route::get('roles/edit/{id}', [App\Http\Controllers\RolesController::class, 'edit'])->name('roles.edit');
            Route::post('roles/update/{id}', [App\Http\Controllers\RolesController::class, 'update'])->name('rolesupdate');
            Route::get('roles/destroy/{id}', [App\Http\Controllers\RolesController::class, 'destroy'])->name('roles.delete');
      