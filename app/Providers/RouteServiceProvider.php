<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
        $this->mapAuthloginRoutes();

        $this->mapKoobookRoutes();

        $this->mapYoblogRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "yoblog" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapYoblogRoutes()
    {
        Route::prefix('yo')
            ->middleware('yo')
            ->namespace($this->namespace)
            ->group(base_path('routes/yoblog.php'));
    }

    /**
     * Define the "fr" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapKoobookRoutes()
    {
        Route::prefix('fr')
            ->middleware('fr')
            ->namespace($this->namespace)
            ->group(base_path('routes/koobook.php'));
    }

    /**
     * Define the "yoblog" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapAuthloginRoutes()
    {
        Route::namespace($this->namespace)
            ->middleware('authlogin')
            ->group(base_path('routes/authlogin.php'));
    }
}
