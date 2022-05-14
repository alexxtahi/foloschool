<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            // Passer le nom de la vue actuelle à toutes les pages
            $view_name = str_replace('.', '-', $view->getName());
            view()->share(['view_name' => $view_name]);
        });
    }
}
