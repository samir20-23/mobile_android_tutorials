<?php

// app/Providers/AppServiceProvider.php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductRepositories\ProductRepositories;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ProductRepositories::class, ProductRepositories::class);
    }

    public function boot()
    {
        //
    }
}
