<?php

namespace App\Utilities;

use Inertia\Inertia as Ina;

class Inertia
{

  /**
   * @var array $layouts
   */
  public array $layouts = [
    'Website',
    'Dashboard'
  ];

  /** Render a react page
   * @param string $layout
   * @param string $page
   * @param array $props
   * @return Ina\Response
   */
  public function render(string $layout, string $page, array $props = []): \Inertia\Response
  {
    $validateLayout = in_array(ucfirst($layout), $this->layouts);
    if (!$validateLayout) abort(404, 'Layout Not found.');
    return Ina::render(ucfirst($layout) . "/{$page}", $props);
  }
}
