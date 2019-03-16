<?php

namespace App\Providers;


use App\Noticia;
use App\Observers\NoticiasObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;




class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Schema::defaultStringLength(191);
        Noticia::observe(NoticiasObserver::class);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
