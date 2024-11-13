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
// Route::get('/cve', function () {
//     // This command will attempt to run `cmd.exe` in the current directory if present
//     $process = new Process(['echo', 'Hello, world']);
//     $process->run();

//     // Output the result of the command
//     return $process->getOutput();
// });

//Route::get('/cve', [CveController::class, 'runCommand']);
