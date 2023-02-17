<?php

use Illuminate\Support\Facades\Route;

use splittlogic\plop\Http\Controllers\plopController;

/*
|--------------------------------------------------------------------------
| Routes must be passed through the web middleware to allow for
|   validation errors and flash messages to be displayed.
|--------------------------------------------------------------------------
*/

Route::get(
  'splittlogic/plop',
  [plopController::class, 'index']
)->name('splittlogic.plop');
