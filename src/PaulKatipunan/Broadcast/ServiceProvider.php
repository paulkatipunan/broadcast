<?php 

namespace Mannysoft\Hanap;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Mannysoft\Hanap\Hanap;

class ServiceProvider extends BaseServiceProvider {
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/hanap.php' => config_path('hanap.php'),
        ]);
        
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/hanap.php', 'hanap'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

}
