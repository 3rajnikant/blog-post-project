<?php


namespace App\Providers;
use \App\Billing\Stripe;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Post;



class AppServiceProvider extends ServiceProvider
{
  
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layouts.aside', function($view) {
            $archives = Post::selectRaw('
                  year(created_at) year,
                  monthname(created_at) month,
                  count(*) published')
                  ->groupBy( 'YEAR','MONTH')
                  ->orderByRaw('min(created_at) asc')
                  ->get()
                  ->toArray();
            $view->with('archives', $archives);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class,function (){

  return new  Stripe(config('services.stripe.secret'));
});
    }
}
