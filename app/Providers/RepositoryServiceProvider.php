<?php

namespace App\Providers;

use App\Repository\UserInterface;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind(UserInterface::class, UserRepository::class);
    }
}
