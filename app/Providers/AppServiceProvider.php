<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Utilities
 */

use \App\Utilities\Inertia;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    $this->app->bind('inertia', function () {
      return new Inertia();
    });
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    //
  }
}
