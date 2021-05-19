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
    return redirect()->route('login');
});

Auth::routes();

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/escritorio', [App\Http\Controllers\admin\EscritorioController::class, 'index'])->name('escritorio');

Route::get('/inscripcion', [App\Http\Controllers\admin\InscripcionController::class, 'index'])->name('inscripcion.index');
Route::post('/inscripcion/store', [App\Http\Controllers\admin\InscripcionController::class, 'store'])->name('inscripcion.store');


Route::get('/config-db-refactori-dev-2021-03-29', function() {
    $exitCode = Artisan::call('migrate:fresh');
    $exitCode = Artisan::call('db:seed --class=UserSeeder');
//    $exitCode = Artisan::call('db:seed --class=PermissionSeeder');
//    $exitCode = Artisan::call('db:seed --class=ProgramSeeder');
//    $exitCode = Artisan::call('db:seed --class=InscriptionSeeder');
//    $exitCode = Artisan::call('db:seed --class=CountrySeeder');
    $exitCode = Artisan::call('db:seed --class=AlertSeeder');
    
    return 'refresh db Ok';
});

Route::get('/config-clean-cache-dev-2021-03-29', function() {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:cache');
    return 'refresh cache Ok';
});
