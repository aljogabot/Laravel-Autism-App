<?php namespace App\Providers;

use Request, Config, Auth;
use Illuminate\Support\ServiceProvider;

class SiteConfigServiceProvider extends ServiceProvider {

    /*public function __construct( Request $request ) {
        $this->request = $request;
    }*/

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        //
        view()->composer( 'public.blocks.site-config', function( $view ) {

            $site_config = Config::get( 'site-config' );
            $site_config[ 'base_url' ] = url( '/' ) . '/';
            $site_config[ 'current_url' ] = Request::url();
            $site_config[ 'logged_in' ] = Auth::check();

            $view->with( 'site_config', json_encode( $site_config ) );
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
