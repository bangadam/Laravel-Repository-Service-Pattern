<?php

namespace App\Providers;

use App\Repositories\Contract\PostContract;
use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
     /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PostContract::class,
            PostRepository::class
        );
    }
}
