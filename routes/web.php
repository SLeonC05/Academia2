<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\App;

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
    return view('cursos.bienvenido');
});

Route::get('/cursos/nosotros', function () {
    return view('cursos.nosotros');
});
Route::resource('cursos', CursoController::class);

Route::resource('docentes', DocenteController::class);

Route::resource('estudiantes', EstudianteController::class);

Route::get('locale/{locale}', function($locale){
    App::setLocale($locale);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
