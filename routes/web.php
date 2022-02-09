<?php

use Illuminate\Support\Facades\Route;
use Wnx\SidecarBrowsershot\BrowsershotLambda;

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

Route::get('/nodejs', function () {
    return \App\Sidecar\NodeExample::execute([
        'name' => 'John Doe',
    ]);
});

Route::get('/python', function () {
    return \App\Sidecar\PythonExample::execute([
        'name' => 'John Doe',
    ]);
});

Route::get('/go', function () {
    return \App\Sidecar\GoExample::execute([
        'name' => 'John Doe',
    ]);
});

Route::get('/dotnet', function () {
    return \App\Sidecar\DotnetExample::execute([
        'name' => 'John Doe',
    ]);
});

// Route::get('/{url}', function ($url) {
//     $image = BrowsershotLambda::url("https://${url}")
//         ->windowSize(1920, 1080)
//         ->screenshot();
//
//     return response($image)->header('Content-Type', 'image/png');
// });
