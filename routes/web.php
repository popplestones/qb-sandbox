<?php

use Illuminate\Support\Facades\Route;
use Popplestones\Quickbooks\Services\QuickbooksClient;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(QuickbooksClient $quickbooks) {
    $authorization_uri = null;

    try {
        $authorization_uri = $quickbooks->authorizationUri();
    } catch (\Exception $e)
    {
        // do nothing
    }
    
    return view('dashboard', ['authorization_uri' => $authorization_uri]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
