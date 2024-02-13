<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\UsuarioServiceInterface;
use App\Services\Impl\UsuarioService;
use App\Services\Contracts\CidadeServiceInterface;
use App\Services\Impl\CidadeService;
use App\Services\Contracts\EstadoServiceInterface;
use App\Services\Impl\EstadoService;
use App\Services\Contracts\EnderecoServiceInterface;
use App\Services\Impl\EnderecoService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UsuarioServiceInterface::class, UsuarioService::class);
        $this->app->bind(CidadeServiceInterface::class, CidadeService::class);
        $this->app->bind(EstadoServiceInterface::class, EstadoService::class);
        $this->app->bind(EnderecoServiceInterface::class, EnderecoService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
