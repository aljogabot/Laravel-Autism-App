<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Post;

class LatestPostsProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        //
        view()->composer( 'public.blocks.right-side-bar', function( $view ) {

            $latest_posts = Post::latestLimit( 10 )
                                 ->get();
            $view->with( 'latest_posts', $latest_posts );

        });
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
