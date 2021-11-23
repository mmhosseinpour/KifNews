<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ManageArticleController;
use App\Http\Controllers\Admin\ManageArticleCategoryController;
use App\Http\Controllers\Admin\ManageProductController;
use App\Http\Controllers\Admin\ManageProductCategoryController;
use  App\Http\Controllers\Market\HomeController;

Route::get('/', 'App\Http\Controllers\Market\HomeController@index');
Route::post('/', 'App\Http\Controllers\Market\HomeController@search');
Route::get('/blog/{id}', 'App\Http\Controllers\Market\HomeController@GetArticle');
Route::get('/product/{id}', 'App\Http\Controllers\Market\HomeController@GetProduct');
Route::post('/buy/{id}', 'App\Http\Controllers\Market\HomeController@Purchase');

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', '\App\Http\Controllers\Admin\PanelController@index');
    Route::get('/login', '\App\Http\Controllers\AdminAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', '\App\Http\Controllers\AdminAuth\LoginController@login');
    Route::post('/logout', '\App\Http\Controllers\AdminAuth\LoginController@logout')->name('logout');

    Route::get('/register', '\App\Http\Controllers\AdminAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', '\App\Http\Controllers\AdminAuth\RegisterController@register');

    Route::post('/password/email', '\App\Http\Controllers\AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', '\App\Http\Controllers\AdminAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', '\App\Http\Controllers\AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', '\App\Http\Controllers\AdminAuth\ResetPasswordController@showResetForm');

    Route::resource('ManageArticle', ManageArticleController::class);
    Route::resource('ManageArticleCategory', ManageArticleCategoryController::class);
    Route::resource('ManageProduct', ManageProductController::class);
    Route::resource('ManageProductCategory', ManageProductCategoryController::class);

    Route::get('/home', function () {
        $users[] = Auth::user();
        $users[] = Auth::guard()->user();
        $users[] = Auth::guard('admin')->user();

        return view('admin.home');
    })->name('home');
});


