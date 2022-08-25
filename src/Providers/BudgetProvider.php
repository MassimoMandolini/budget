<?php

namespace oltrematica\budget\Providers;


use Illuminate\Support\ServiceProvider;

class BudgetProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'budget');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    }
}
