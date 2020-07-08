<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\VoteRepositoryInterface;
use App\Repositories\Eloquents\VoteRepository;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Eloquents\CategoryRepository;
use App\Repositories\Interfaces\FeedbackRepositoryInterface;
use App\Repositories\Eloquents\FeedbackRepository;
use App\Repositories\Eloquents\NewsRepository;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use App\Repositories\Eloquents\TagRepository;
use App\Repositories\Interfaces\TagRepositoryInterface;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            VoteRepositoryInterface::class,
            VoteRepository::class
        );
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
         );

        $this->app->bind(
            FeedbackRepositoryInterface::class,
            FeedbackRepository::class
         );
        $this->app->bind(
            NewsRepositoryInterface::class,
            NewsRepository::class
         );
        $this->app->bind(
            TagRepositoryInterface::class,
            TagRepository::class
         );

        
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
