<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleInteractionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ManageArticleController;
use App\Http\Controllers\ManageArticleCategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('ArticleInteraction', ArticleInteractionController::class);
Route::resource('blog', BlogController::class);
Route::prefix('admin')->group(function () {
    Route::resource('ManageArticle', ManageArticleController::class);
    Route::resource('ManageArticleCategory', ManageArticleCategoryController::class);
});
?>
