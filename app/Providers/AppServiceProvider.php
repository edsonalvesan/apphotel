<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
			
	    $this->app->bind(
			'App\ARep\Repositories\IFinanceiroRepository',
			'App\ARep\Repositories\FinanceiroRepository'
		);

	    $this->app->bind(
			'App\ARep\Repositories\IContratoRepository',
			'App\ARep\Repositories\ContratoRepository'
		);

		$this->app->bind(
			'App\ARep\Repositories\IUsuarioRepository',
			'App\ARep\Repositories\UsuarioRepository'
		);

		$this->app->bind(
			'App\ARep\Repositories\IProprietarioRepository',
			'App\ARep\Repositories\ProprietarioRepository'
		);

		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);


	}

}
