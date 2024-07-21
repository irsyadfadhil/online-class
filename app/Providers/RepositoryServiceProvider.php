<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProfitSharingRepository;
use App\Repositories\ProfitSharingRepositoryInterface;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(ProfitSharingRepositoryInterface::class, ProfitSharingRepository::class);
    }
}
