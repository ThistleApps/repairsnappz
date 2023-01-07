<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/admin/home', function () {
    return view('admin.adminhomepage');
});*/

//Route::get('/admin/home', 'Admin\DashboardController@index');



Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::get('/kiosk', 'HomeController@kiosk')->name('home.kiosk');

    Route::get('/admin/seeduser', 'Admin\AdminHomeController@seeduser');

    //Admin routing with role enforcement

    /*Route::group(['middleware'  => ['role:super-admin|admin|staff']], function() {
        Route::get('/admin/home', function () {
            return view('admin.adminhomepage');
        });
    });*/

    //Route Group with auth and permission enforcement
    //Route::group(['middleware' => ['auth', 'permission']], function() {

    //Route Group with auth enforcement only
    Route::group(['middleware' => ['auth']], function() {

        /*Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth'])->name('dashboard');*/

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        // Admin routing with Auth enforcement only - no permission or role enforcement
        Route::get('/admin/home', 'Admin\AdminHomeController@index')->name('adminhome');

        Route::get('/admin/user-landing', 'Admin\AdminHomeController@userlanding')->name('userlanding');

        /**
         * Admin>User Routes
         */
        Route::group(['middleware' => ['role:super-admin|admin']], function() {
            Route::get('admin/users', [UsersController::class, 'index'])->name('users');
            Route::get('admin/create', 'UsersController@create')->name('users.create');
            Route::post('admin/create', 'UsersController@store')->name('users.store');
            Route::get('admin/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('admin/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('admin/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('admin/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        /**
         * Admin>Permission Routes
         */
        Route::group(['prefix' => 'admin/permissions'], function() {

            Route::get('/', [PermissionsController::class, 'index'])->name('permissions');
            Route::get('/create', [PermissionsController::class, 'create'])->name('permissionscreate');
            Route::post('/create', [PermissionsController::class, 'store'])->name('permissionsstore');
            Route::get('/{permission}/edit', [PermissionsController::class, 'edit'])->name('permissionsedit');
            Route::patch('/{permission}/update', [PermissionsController::class, 'update'])->name('permissionsupdate');
            Route::delete('/{permission}/delete', [PermissionsController::class, 'destroy'])->name('permissionsdestroy');

/*            Route::get('/create', 'PermissionsController@create')->name('permissionscreate');
            Route::POST('/create', 'PermissionsController@store')->name('permissionsstore');
            Route::PATCH('/{permission}/update', 'PermissionsController@update')->name('permissionsupdate');
            Route::get('/{permission}/edit', 'PermissionsController@edit')->name('permissionsedit');
            Route::delete('/{permission}/delete', 'PermissionsController@destroy')->name('permissionsdestroy');*/

/*            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');*/
        });



        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
});

require __DIR__.'/auth.php';
