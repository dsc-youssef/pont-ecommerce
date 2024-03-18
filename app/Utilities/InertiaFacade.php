<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Facade;

/**
 * @var array $layouts
 * @method static \Inertia\Response render(string $layout, string $page, array $props)
 */
class InertiaFacade extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'inertia';
  }
}
