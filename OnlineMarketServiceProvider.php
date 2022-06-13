<?php
namespace OnlineMarket;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class OnlineMarketServiceProvider extends ServiceProvider
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
    public function boot(){

        Route::middleware('api')
            ->prefix('api')
            ->group(__DIR__ . ('/routes/api.php'));
        
        Route::middleware('web')
            ->group(__DIR__ . ('/routes/web.php'));
    }
}