<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Examples
|--------------------------------------------------------------------------
|
| Route::get('users', ['as' => 'user.index',    'uses' => 'UserController@index']);
| Route::get('user/create', ['as' => 'user.create', 'uses' => 'UserController@create']);
| Route::post('user', ['as' => 'user.store',    'uses' => 'UserController@store']);
| Route::get('user/{user_id}', ['as' => 'user.show',    'uses' => 'UserController@show']);
| Route::get('user/{user_id}/edit', ['as' => 'user.edit',   'uses' => 'UserController@edit']);
| Route::patch('user/{user_id}', ['as' => 'user.update',    'uses' => 'UserController@update']);
| Route::delete('user/{user_id}', ['as' => 'user.delete',   'uses' => 'UserController@delete']);
| Route::put('user/{user_id}', ['as' => 'user.restore', 'uses' => 'UserController@restore']);
|
| For autodiscovery use {user:id} instead of ${user_id}
*/

/*
|--------------------------------------------------------------------------
| Guests routes (must be unauthenticated)
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => ['guest']], function () {
    // Login/Logout routes
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);

    // Register routes
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

/*
|--------------------------------------------------------------------------
| Routes behind authentication
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['auth']], function () {

    Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

    Route::get('/account', function () {
        return "You should do something with this page";
    })->name('account');

    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::group(['middleware' => ['admin'], 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        // Admin routes
    });
});



Route::get('/', function () {
    return inertia('Welcome', [
        'users' => App\Models\User::orderBy('created_at', 'desc')->take(5)->get()
    ]);
})->name('home');