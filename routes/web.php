<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;
use App\Http\Controllers\CveController;

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
Route::get('/env', function (Request $request) {

    if (App::environment('staging')) {
        Config::set('app.debug', true); // Turn on debug mode
        return response()->json([
            'test' => phpinfo(),
            'environment' => App::environment(),
            'debug_mode' => config('app.debug'),
        ]);
    } else {
        dd(App::environment());
    }
});
