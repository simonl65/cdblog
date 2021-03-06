<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Watch for loading of partials.sidebar and load the "archives" variable
        // with the archives data (method in Post model)
        view()->composer
        (
            'partials.sidebar',
            function( $view ) {
                // Get all archives:
                $view->with( 'archives', \App\Post::archives() );

                // Get all tags (as long as they have an associated post):
                $view->with('tags', \App\Tag::has('posts')->pluck('name'));
            }
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
