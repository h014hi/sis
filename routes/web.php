<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioCController;
use App\Http\Controllers\ActaControlador;
use App\Http\Controllers\OperativoControlador;
use App\Http\Controllers\InspectorControlador;
use App\Http\Controllers\InfraccionControlador;
use App\Http\Controllers\EmpresasControlador;
use App\Http\Controllers\PDFControlador;
use App\Http\Controllers\PagosControlador;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pagina_principal');
})->name('home');



//consulta con especificaciones
Route::get('/consulta',[ActaControlador::class,'buscar'])->name('consulta.buscar');

//MOSTRAR INFRACCIONES
Route::get('/infraccion/{codigo_infra}', [InfraccionControlador::class, 'showInfraccion'])->name('infraccion.mostrar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/operativos',[OperativoControlador::class,'index'])->name('operativos');
    Route::get('/actas',[ActaControlador::class,'index'])->name('actas');
    Route::get('/inspectores' ,[InspectorControlador::class,'index'])->name('inspectores');
    Route::get('/empresas', [EmpresasControlador::class,'index'])->name('empresas');
    Route::get('/pagos', [PagosControlador::class,'index'])->name('pagos');


    //REPORTES EN VIVO
    Route::get('/graficos', [PDFControlador::class,'mostrarGrafico'])->name('grafico');

                //OPERATIVOS
            Route::get('/registraroperativo',[OperativoControlador::class,'create'])->name('registrar.operativo');
            Route::post('/operativo/{id}', [OperativoControlador::class, 'update'])->name('operativo.update');
            Route::delete('/operativo/{id}', [OperativoControlador::class, 'destroy'])->name('operativo.destroy');
            Route::get('/actas/{id}', [ActaControlador::class,'show'])->name('actasdeloperativo');

            //INSPECTORES Y EMPRESAS
            Route::get('/guardar-datos',[InspectorControlador::class,'store'])->name('guardar-datos');
            Route::get('/guardar-empresas',[EmpresasControlador::class,'store'])->name('guardar-empresas');
            Route::get('/inspectores/{id}', [InspectorControlador::class, 'update'])->name('inspector.update');
            Route::delete('/inspectores/{id}', [InspectorControlador::class, 'destroy'])->name('inspector.destroy');
            Route::get('/empresas/{id}', [EmpresasControlador::class,'update'])->name('empresa.update');
            Route::delete('/empresas/{id}', [EmpresasControlador::class, 'destroy'])->name('empresa.destroy');

            //PAGOS ACCIONES
            Route::get('/registrarpago',[PagosControlador::class,'create'])->name('registrar.pago');
            Route::post('/pagos/{id}', [PagosControlador::class, 'update'])->name('pago.update');
            Route::delete('/pagos/{id}', [PagosControlador::class, 'destroy'])->name('pago.destroy');

            //ACTA ACCIONES
            Route::get('/guardar-actas/{id}',[ActaControlador::class,'guardaracta'])->name('guardar.actas');
            Route::post('/actaseditar/{id}', [ActaControlador::class, 'editaracta'])->name('acta.update');
            Route::delete('/acta/{id}', [ActaControlador::class, 'destroy'])->name('acta.destroy');



            //PDF GENERAR PRUEBA
            Route::get('/generar-pdf', [PDFControlador::class, 'generarPDF']);
            Route::post('/generarreporte', [PDFControlador::class, 'generarreporte'])->name('generar.reporte');
            Route::get('/ifiactas/{id}', [PDFControlador::class, 'generarDocumento'])->name('ifi');

            //CONSULTA ADMIN
            Route::get('/busqueda', [ActaControlador::class, 'buscar2'])->name('busqueda');


            //AUTOAPI APIS SIMPLES
            Route::get('/empresasreport', [Controller::class, 'empresas']);
            Route::get('/conductores/{id}', [Controller::class, 'conductor']);
            Route::get('/placas/{id}', [Controller::class, 'placas']);
});
