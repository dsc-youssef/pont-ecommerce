<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Utilities\Facade\Inertia;
// use Illuminate\Http\Request;

class Home extends Controller
{
  /** Show home page
   * @return \Inertia\Response
   */
  public function show(): \Inertia\Response
  {
    return Inertia::render('dashboard', "Home", __('dashboard/pages/home'));
  }
}
