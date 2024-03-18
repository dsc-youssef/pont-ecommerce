<?php

namespace App\Utilities\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @var static $layouts
 * @var static $website_url
 * @var static $dashboard_url
 * @method static \Inertia\Response render(string $layout, string $page, array $page_words, array $props)
 * @method static array getLayoutRequirements(string $layout)
 * @method static object getUrls()
 * @method static bool validateLayout(string $layout)
 */
class Inertia extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'inertia';
  }
}
