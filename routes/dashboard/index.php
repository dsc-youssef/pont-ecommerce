<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Home;
use App\Utilities\Facade\Inertia;

# Home Page
Route::controller(Home::class)->group(function () {
  Route::get(Inertia::getUrls()->dashboard . "/", 'show');
});
