<?php

namespace App\Utilities;

use Inertia\Inertia as Ina;

class Inertia
{

  /** * @var array $layouts */
  public array $layouts = [
    'Website',
    'Dashboard'
  ];

  /** @var string $dashboard_url */
  private string $dashboard_url = '/dashboard';

  /** @var string $website_url */
  private string $website_url = "";

  /** Get urls
   * @return object
   */
  public function getUrls(): object
  {
    return (object) [
      'website' => $this->website_url,
      'dashboard' => $this->dashboard_url
    ];
  }

  /** Check layout validate
   * @param string $layout
   * @return bool
   */
  public function validateLayout(string $layout): bool
  {
    return in_array(ucfirst($layout), $this->layouts);
  }

  /** Get Layout Requirements
   * @param string $layout
   * @return array
   */
  public function getLayoutRequirements(string $layout): array
  {
    if (ucwords($layout) === 'WEBSITE') return $this->websiteRequirements();
    if (ucwords($layout) === 'Dashboard') return $this->dashboardRequirements();
    return [];
  }

  /** Render a react page
   * @param string $layout
   * @param string $page
   * @param array $page_words
   * @param array $props
   * @return Ina\Response
   */
  public function render(string $layout, string $page, array $page_words = [], array $props = []): \Inertia\Response
  {
    if (!$this->validateLayout($layout)) abort(404, 'Layout Not found.');

    return Ina::render(ucfirst($layout) . "/{$page}", array_merge(
      ['page_words' => $page_words],
      $this->getLayoutRequirements($layout),
      $props
    ));
  }

  /** Website Layout Requirements
   * @return array
   */
  private function websiteRequirements(): array
  {

    return [
      'layout_words' => array_merge(
        __('website/global')
      )
    ];
  }

  /** Dashboard Layout Requirements
   * @return array
   */
  private function dashboardRequirements(): array
  {
    return [
      'layout_words' => array_merge(
        __('dashboard/global')
      )
    ];
  }
}
