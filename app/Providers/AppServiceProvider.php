<?php

namespace App\Providers;

use App\Contracts\Parser;
use App\Contracts\Social;
use App\Services\ParserServices;
use App\Services\SocialService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Social::class, SocialService::class);
        $this->app->bind(Parser::class, ParserServices::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
