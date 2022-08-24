<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Interfaces\SubcategoryRepositoryInterface;
use App\Repositories\SubcategoryRepository;
use App\Interfaces\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Interfaces\FabricRepositoryInterface;
use App\Repositories\FabricRepository;
use App\Interfaces\StockRepositoryInterface;
use App\Repositories\StockRepository;
use App\Interfaces\FrontendRepositoryInterface;
use App\Repositories\FrontendRepository;
use App\Interfaces\CartRepositoryInterface;
use App\Repositories\CartRepository;
use App\Interfaces\SpecialOrderRepositoryInterface;
use App\Repositories\SpecialOrderRepository;
use App\Interfaces\StyleRepositoryInterface;
use App\Repositories\StyleRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(SubcategoryRepositoryInterface::class, SubcategoryRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(FabricRepositoryInterface::class, FabricRepository::class);
        $this->app->bind(StockRepositoryInterface::class, StockRepository::class);
        $this->app->bind(FrontendRepositoryInterface::class, FrontendRepository::class);
        $this->app->bind(CartRepositoryInterface::class, CartRepository::class);
        $this->app->bind(SpecialOrderRepositoryInterface::class, SpecialOrderRepository::class);
        $this->app->bind(StyleRepositoryInterface::class, StyleRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
