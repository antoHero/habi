<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\FabricController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\WishlistController;

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
Route::controller(FrontendController::class)->group(function() {
  Route::get('/', 'home')->name('get.home');
  Route::get('/product-json/{id}', 'productJson');
  Route::prefix('women')->group(function() {
    Route::get('/', 'womenArea')->name('get.women.area');
    Route::get('/{slug}', 'productByCategory')->name('get.product.category.area');
  });

  Route::get('/men', 'menArea')->name('get.men.area');
  Route::get('product/details/{slug}', 'details')->name('product.details');
});

Route::controller(CartController::class)->group(function() {
  Route::prefix('cart')->group(function() {
    Route::get('/', 'cart')->name('cart.get');
    Route::get('/fetch', 'cartItemsJquery');
    Route::get('/delete/{hash}', 'removeFromCart')->name('cart.remove');
    Route::get('add/{id}', 'addToCart')->name('cart.add');
    Route::post('update-quantity/{hash}', 'updateQuantity')->name('cart.update.quantity');
    Route::get('/checkout', function() {
      return view('pages.frontend.cart.checkout');
    });
  });
});

Route::controller(CheckoutController::class)->group(function() {
  Route::get('cart/checkout', 'index')->name('checkout');
  Route::post('/pay', 'redirectToGateway')->name('pay');
  Route::get('/payment/callback', 'handleGatewayCallback');
});

Route::controller(WishlistController::class)->group(function() {
  Route::prefix('wishlist')->group(function() {
    Route::get('/', 'index')->name('wishlist.get');
    Route::get('/{id}', 'addToWishlist')->name('wishlist.add');
  });
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

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
            Route::get('/ajax/{id}', 'subcategoryAjax');
            Route::get('/{slug}', 'subcategory')->name('edit.subcategory.view');
            Route::put('/update/{slug}', 'updateSubcategory')->name('update.subcategory');
            Route::put('/update-status/{slug}', 'updateSubcategory')->name('subcategory.change.status');
            Route::delete('/delete/{slug}', 'deleteSubcategory')->name('delete.subcategory');
        });
    });

    Route::prefix('products')->group(function() {
        Route::controller(ProductController::class)->group(function() {

            //routes for products
            Route::post('apparels/create', 'createNewApparel')->name('create.new.apparel');
            Route::get('apparels/new', 'newApparelView')->name('new.apparel.view');
            Route::get('apparels', 'apparelsIndex')->name('all.apparels');
            Route::get('/apparel/{slug}', 'apparel')->name('edit.apparel.view');
            Route::put('/apparel/update/{slug}', 'updateApparel')->name('update.apparel');
            Route::put('/apparel/update-status/{slug}', 'changeApparelStatus')->name('change.apparel.status');
            Route::delete('/apparel/delete/{slug}', 'deleteApparel')->name('delete.apparel');

            //routes for product attributes
            Route::get('apparels/create-attributes/{slug}/{type}', 'createAttributesView')->name('create.apparel.attributes');
            Route::post('apparels/create-new-attribute/{slug}', 'createNewAttribute')->name('create.new.attributes');
            Route::get('apparels/attribute/{id}', 'productAttribute')->name('get.product.attribute');
            Route::put('apparels/update-attribute/{id}', 'updateAttribute')->name('update.attribute');
            Route::get('product/{slug}/{type}', 'getProduct');
        });
    });


    //routes for fabrics

    Route::prefix('fabrics')->group(function() {
      Route::controller(FabricController::class)->group(function() {
        Route::get('/', 'fabricsIndex')->name('fabrics.index');
        Route::get('/new', 'newFabricView')->name('new.fabric.view');
        Route::post('/create', 'createNewFabric')->name('create.new.fabric');
        Route::get('/{slug}', 'getFabric')->name('get.fabric');
        Route::put('/{slug}', 'updateFabric')->name('update.fabric');
      });
    });

});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
