<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\UsuarioRepository::class, \App\Repositories\UsuarioRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MidiaRepository::class, \App\Repositories\MidiaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ProdutosRepository::class, \App\Repositories\ProdutosRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\VisitasRepository::class, \App\Repositories\VisitasRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UsuarioRepository::class, \App\Repositories\UsuarioRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\HostRepository::class, \App\Repositories\HostRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ConfiguracaoRepository::class, \App\Repositories\ConfiguracaoRepositoryEloquent::class);
        //:end-bindings:
    }
}
