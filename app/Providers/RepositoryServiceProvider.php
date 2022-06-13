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
