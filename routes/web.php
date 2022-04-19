<?php

use Illuminate\Support\Facades\Route;

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

use Hhxsv5\LaravelS\Components\Prometheus\Exporter;

Route::get('/actuator/prometheus', function () {
    $result = app(Exporter::class)->render();
    return response($result, 200, ['Content-Type' => Exporter::REDNER_MIME_TYPE]);
});
