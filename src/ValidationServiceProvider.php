<?php namespace mnshankar\Validation;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'mnshankar\Validation\FactoryInterface',
			'mnshankar\Validation\LaravelValidator'
		);
	}

	public function boot()
	{
		$this->package('mnshankar/formvalidation',null, __DIR__);
	}

}
