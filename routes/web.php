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


Route::get('/cargadocumentos/{typeForm?}', [App\Http\Controllers\admin\cargadocumentoController::class, 'index'])->name('cargadocumentos.index');
Route::put('/cargadocumentos/valida/form', [App\Http\Controllers\admin\cargadocumentoController::class, 'typeForm'])->name('cargadocumentos.valida.form');
Route::post('/cargadocumentos/store/new', [App\Http\Controllers\admin\cargadocumentoController::class, 'storeNew'])->name('cargadocumentos.store.new');
Route::post('/cargadocumentos/store/homologation', [App\Http\Controllers\admin\cargadocumentoController::class, 'storeHomolog'])->name('cargadocumentos.store.homologation');
Route::get('storage/app/aunar/Documents/{id}/{archivo}', function ($id, $archivo) {

    $file = 'Documents/' . $id . '/' . $archivo;
    $path_file = storage_path() . '/app/aunar/' . $file;
//    $url = $path_url . '/storage/aunar/Documents/' . $id . '/' . $archivo;
//    $existe = Storage::disk('aunar')->exists($file);
//    $url_file = Storage::disk('aunar')->url("app/aunar/{$file}");
//    $path_url = Request::root();
//     //verificamos si el archivo existe y lo retornamos
    if (Storage::disk('aunar')->exists($file)) {
        return response()->download($path_file);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);
});

Route::get('/pagos', [App\Http\Controllers\admin\pagoController::class, 'index'])->name('pagos.index');
Route::get('/pagos/tarjetas', [App\Http\Controllers\admin\pagoController::class, 'indexTarjetas'])->name('pagos.cards');

Route::get('/factura/html/stream/{user_id}', [App\Http\Controllers\admin\FacturaController::class, 'htmlStream'])->name('factura.htmlStream');

Route::get('/openpay', [App\Http\Controllers\OpenPayController::class, 'index'])->name('openpay.index');
Route::post('/openpay/pay', [App\Http\Controllers\OpenPayController::class, 'store'])->name('openpay.store');

Route::get('/config-db-refactori-dev-2021-03-29', function() {
    $exitCode = Artisan::call('migrate:fresh');
    $exitCode = Artisan::call('db:seed --class=UserSeeder');
    $exitCode = Artisan::call('db:seed --class=PermissionSeeder');
    $exitCode = Artisan::call('db:seed --class=ProgramSeeder');
    $exitCode = Artisan::call('db:seed --class=InscriptionSeeder');
    $exitCode = Artisan::call('db:seed --class=CountrySeeder');
    $exitCode = Artisan::call('db:seed --class=AlertSeeder');
    $exitCode = Artisan::call('db:seed --class=PriceSeeder');
    $exitCode = Artisan::call('db:seed --class=PagoSeeder');

    return 'refresh db Ok';
});

Route::get('/config-clean-cache-dev-2021-03-29', function() {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:cache');
    return 'refresh cache Ok';
});
