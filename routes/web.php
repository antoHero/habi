<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;

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

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});

Route::prefix('dashboard')->group(function() {
    Route::prefix('categories')->group(function() {
        Route::controller(CategoryController::class)->group(function() {
            Route::post('/create', 'createCategory')->name('create.category');
            Route::get('/new', 'categoryView')->name('new.category.view');
            Route::get('/', 'categoryIndex')->name('all.categories');
            Route::get('/{slug}', 'category')->name('edit.category.view');
            Route::put('/update/{slug}', 'updateCategory')->name('update.category');
            Route::put('/update-status/{slug}', 'updateCategory')->name('category.change.status');
            Route::delete('/delete/{slug}', 'deleteCategory')->name('delete.category');
        });
    });

    Route::prefix('subcategories')->group(function() {
        Route::controller(SubcategoryController::class)->group(function() {
            Route::post('/create', 'createSubcsategory')->name('create.subcategory');
            Route::get('/new', 'subcategoryView')->name('new.subcategory.view');
            Route::get('/', 'subcategoryIndex')->name('all.subcategories');
            Route::get('/{slug}', 'subcategory')->name('edit.subcategory.view');
            Route::put('/update/{slug}', 'updateSubcategory')->name('update.subcategory');
            Route::put('/update-status/{slug}', 'updateSubcategory')->name('subcategory.change.status');
            Route::delete('/delete/{slug}', 'deleteSubcategory')->name('delete.subcategory');
        });
    });
    
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
