<?php

namespace Dexperts\MasterTemplates;

use Illuminate\Support\ServiceProvider;

class MasterTemplatesServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__.'/config/master-templates.php', 'master-templates'
		);
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadTranslationsFrom(__DIR__.'/resources/lang', 'master-templates');
		$this->loadViewsFrom(__DIR__.'/resources/views', 'master-templates');

		$this->publishes([
			__DIR__.'/config/master-templates.php' => config_path('master-templates.php'),
		]);
		$this->publishes([
			__DIR__.'/resources/views' => resource_path('views/vendor/master-templates'),
		]);
		$this->publishes([
			__DIR__.'/resources/assets' => public_path('vendor/master-templates'),
		], 'public');

	}
}
