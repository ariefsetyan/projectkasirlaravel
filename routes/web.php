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
Route::get('/builder', [App\Http\Controllers\BuilderController::class, 'index'])->name('builder.index');
Route::post('/builder/cek', [App\Http\Controllers\BuilderController::class, 'cek'])->name('builder.cek');
Route::post('/builder/create', [App\Http\Controllers\BuilderController::class, 'create'])->name('builder.create');

Route::group(['middleware' => ['auth']], function() {
    Route::get('roles', [App\Http\Controllers\RolesController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [App\Http\Controllers\RolesController::class, 'create'])->name('roles.create');
    Route::post('roles/store', [App\Http\Controllers\RolesController::class, 'store'])->name('roles.store');
    Route::get('roles/show/{id}', [App\Http\Controllers\RolesController::class, 'show'])->name('roles.show');
    Route::get('roles/edit/{id}', [App\Http\Controllers\RolesController::class, 'edit'])->name('roles.edit');
    Route::post('roles/update/{id}', [App\Http\Controllers\RolesController::class, 'update'])->name('rolesupdate');
    Route::get('roles/destroy/{id}', [App\Http\Controllers\RolesController::class, 'destroy'])->name('roles.delete');
//    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);

    Route::get('menus', [App\Http\Controllers\MenusController::class, 'index'])->name('menus.index');
    Route::get('menus/create', [App\Http\Controllers\MenusController::class, 'create'])->name('menus.create');
    Route::post('menus/store', [App\Http\Controllers\MenusController::class, 'store'])->name('menus.store');
    Route::get('menus/show/{id}', [App\Http\Controllers\MenusController::class, 'show'])->name('menus.show');
    Route::get('menus/edit/{id}', [App\Http\Controllers\MenusController::class, 'edit'])->name('menus.edit');
    Route::post('menus/update/{id}', [App\Http\Controllers\MenusController::class, 'update'])->name('menusupdate');
    Route::get('menus/destroy/{id}', [App\Http\Controllers\MenusController::class, 'destroy'])->name('menus.delete');

    Route::get('permissions', [App\Http\Controllers\PermissionsController::class, 'index'])->name('permissions.index');
    Route::get('permissions/create', [App\Http\Controllers\PermissionsController::class, 'create'])->name('permissions.create');
    Route::post('permissions/store', [App\Http\Controllers\PermissionsController::class, 'store'])->name('permissions.store');
    Route::get('permissions/show/{id}', [App\Http\Controllers\PermissionsController::class, 'show'])->name('permissions.show');
    Route::get('permissions/edit/{id}', [App\Http\Controllers\PermissionsController::class, 'edit'])->name('permissions.edit');
    Route::post('permissions/update/{id}', [App\Http\Controllers\PermissionsController::class, 'update'])->name('permissionsupdate');
    Route::get('permissions/destroy/{id}', [App\Http\Controllers\PermissionsController::class, 'destroy'])->name('permissions.delete');

});




Route::get('cat_item', [App\Http\Controllers\Cat_itemController::class, 'index'])->name('cat_item.index');
            Route::get('cat_item/create', [App\Http\Controllers\Cat_itemController::class, 'create'])->name('cat_item.create');
            Route::post('cat_item/store', [App\Http\Controllers\Cat_itemController::class, 'store'])->name('cat_item.store');
            Route::get('cat_item/show/{id}', [App\Http\Controllers\Cat_itemController::class, 'show'])->name('cat_item.show');
            Route::get('cat_item/edit/{id}', [App\Http\Controllers\Cat_itemController::class, 'edit'])->name('cat_item.edit');
            Route::post('cat_item/update/{id}', [App\Http\Controllers\Cat_itemController::class, 'update'])->name('cat_itemupdate');
            Route::get('cat_item/destroy/{id}', [App\Http\Controllers\Cat_itemController::class, 'destroy'])->name('cat_item.delete');
      Route::get('kendaraan', [App\Http\Controllers\KendaraanController::class, 'index'])->name('kendaraan.index');
            Route::get('kendaraan/create', [App\Http\Controllers\KendaraanController::class, 'create'])->name('kendaraan.create');
            Route::post('kendaraan/store', [App\Http\Controllers\KendaraanController::class, 'store'])->name('kendaraan.store');
            Route::get('kendaraan/show/{id}', [App\Http\Controllers\KendaraanController::class, 'show'])->name('kendaraan.show');
            Route::get('kendaraan/edit/{id}', [App\Http\Controllers\KendaraanController::class, 'edit'])->name('kendaraan.edit');
            Route::post('kendaraan/update/{id}', [App\Http\Controllers\KendaraanController::class, 'update'])->name('kendaraanupdate');
            Route::get('kendaraan/destroy/{id}', [App\Http\Controllers\KendaraanController::class, 'destroy'])->name('kendaraan.delete');
      Route::get('customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
            Route::get('customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
            Route::post('customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
            Route::get('customer/show/{id}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer.show');
            Route::get('customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
            Route::post('customer/update/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customerupdate');
            Route::get('customer/destroy/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.delete');
      Route::get('kendaraan', [App\Http\Controllers\KendaraanController::class, 'index'])->name('kendaraan.index');
            Route::get('kendaraan/create', [App\Http\Controllers\KendaraanController::class, 'create'])->name('kendaraan.create');
            Route::post('kendaraan/store', [App\Http\Controllers\KendaraanController::class, 'store'])->name('kendaraan.store');
            Route::get('kendaraan/show/{id}', [App\Http\Controllers\KendaraanController::class, 'show'])->name('kendaraan.show');
            Route::get('kendaraan/edit/{id}', [App\Http\Controllers\KendaraanController::class, 'edit'])->name('kendaraan.edit');
            Route::post('kendaraan/update/{id}', [App\Http\Controllers\KendaraanController::class, 'update'])->name('kendaraanupdate');
            Route::get('kendaraan/destroy/{id}', [App\Http\Controllers\KendaraanController::class, 'destroy'])->name('kendaraan.delete');
      Route::get('customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
            Route::get('customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
            Route::post('customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
            Route::get('customer/show/{id}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer.show');
            Route::get('customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
            Route::post('customer/update/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customerupdate');
            Route::get('customer/destroy/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.delete');
      