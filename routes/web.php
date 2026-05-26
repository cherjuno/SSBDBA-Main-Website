<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\AdminPluginController;
use App\Http\Controllers\AdminContentController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/contact', [HomeController::class, 'storeContact']);
Route::post('/research-proposal', [HomeController::class, 'storeResearchProposal']);

Route::prefix('admin')->name('admin.')->group(function () {
	Route::get('/login', [AdminAuthController::class, 'create'])->name('login');
	Route::post('/login', [AdminAuthController::class, 'store'])->name('login.store');

	Route::middleware('admin')->group(function () {
		Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
		Route::resource('articles', AdminArticleController::class)->except(['show']);
		Route::post('articles/upload-image', [AdminArticleController::class, 'uploadImage'])->name('articles.upload-image');
		Route::get('plugins', [AdminPluginController::class, 'index'])->name('plugins.index');
		Route::post('plugins', [AdminPluginController::class, 'store'])->name('plugins.store');
		Route::patch('plugins/{plugin}/toggle', [AdminPluginController::class, 'toggle'])->name('plugins.toggle');
		Route::get('/content', [AdminContentController::class, 'edit'])->name('content.edit');
		Route::put('/content', [AdminContentController::class, 'update'])->name('content.update');
		Route::post('/logout', [AdminAuthController::class, 'destroy'])->name('logout');
	});
});
