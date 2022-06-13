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
        
        
        $this->publishes([
            __DIR__.'/config/online-market.php' => config_path('online-market.php'),
        ]);


        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->loadViewsFrom(__DIR__.'/views', 'online-market');
    }
}