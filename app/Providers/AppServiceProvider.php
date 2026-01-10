<?php

namespace App\Providers;

use App\Domain\AI\LLMEvaluator;
use App\Domain\Repositories\CategoryRepositoryInterface;
use App\Domain\Repositories\ListingRepositoryInterface;
use App\Infraestructure\AI\OpenAiLLMEvaluator;
use App\Infraestructure\Persistence\EloquentCategoryRepository;
use App\Infraestructure\Persistence\EloquentListingRepository;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            ListingRepositoryInterface::class,
            EloquentListingRepository::class
        );
        $this->app->bind(
            LLMEvaluator::class,
            OpenAiLLMEvaluator::class
        );
        $this->app->bind(
            CategoryRepositoryInterface::class,
            EloquentCategoryRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        RateLimiter::for('login' , function(Request $request){
            $email = (string) $request->input('email');

            return Limit::perMinute(5)->by($email.'|'.$request->ip());
        });
    }
}
