<?php

use App\Http\Controllers\administradorController;
use App\Http\Controllers\citaAdminController;
use App\Http\Controllers\comentariosController;
use App\Http\Controllers\citasController;
use App\Http\Controllers\comentarioadController;
use App\Http\Controllers\empleadoController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\mostrarCitaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\registrarTrabajo;
use App\Http\Controllers\trabajoController;
use App\Http\Controllers\verComentarios;
use App\Http\Controllers\verTrabajoController;
use app\Mail\ComentariosMailable;
use App\Models\cita;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[indexController::class, 'index']);
Route::get('about',[indexController::class, 'about']);
Route::get('/cita',[citasController::class, 'index'])->name('cita');
Route::post('/cita',[citasController::class, 'store']);

Route::get('/comentarios',[comentariosController::class, 'index'])->name('comentarios');
Route::post('/comentarios',[comentariosController::class, 'store']);

Route::get('/cita',[citasController::class, 'index'])->name('cita');
Route::post('/cita',[citasController::class, 'store']);

Auth::routes();


Route::get('/crear-cuenta',[RegisterController::class, 'index'])->name('register');
Route::post('/crear-cuenta',[RegisterController::class, 'store']);

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('pantallaComentarios', function(){
    $correo = new ComentariosMailable;
    Mail::to('lg819970@gmail.com')->send($correo);
    });
    
Route::get('/empleados',[empleadoController::class,'index'])->name('vistaEmpleados');
Route::post('/empleados',[empleadosController::class, 'store']);

Route::get('/mostrarCita',[mostrarCitaController::class, 'index'])->name('mostrar');
Route::post('/mostrarCita',[mostrarCitaController::class, 'store']);


//Ver citas administradores
Route::get('/verCitaAdmin',[citaAdminController::class, 'index'])->name('citaAdmin');
Route::put('eliminar-citaAd/{id}',[citaAdminController::class, 'destroy'])->name('delete.citaAd');

//Ver comentarios administradores
Route::get('/comentariosad',[comentarioadController::class,'index'])->name('comentarioAdmin');

//Ver Trabajos 
Route::get('/verTrabajo',[verTrabajoController::class,'index'])->name('trabajo');


Route::get('/registrarTrabajo',[trabajoController::class, 'index'])->name('registrar');
Route::post('/registrarTrabajo',[trabajoController::class, 'store']);

Route::get('/verComentarios',[verComentarios::class, 'index'])->name('comentarios');
Route::post('/verComentarios',[verComentarios::class, 'store']);

Route::put('eliminar-comentario/{comentario}',[verComentarios::class, 'destroy'])->name('delete.comentario');
Route::put('eliminar-cita/{id}',[mostrarCitaController::class, 'destroy'])->name('delete.cita');

Route::get('/{users}',[PostController::class, 'index'])->name('post.index');

Route::get('/administrador',[administradorController::class, 'index']);
Route::post('/administrador',[administradorController::class, 'store']);

Route::get('/dashboard',[administradorController::class, 'dash'])->name('dashboard');



Route::get('/gmaps', ['as ' => 'gmaps', 'uses' => 'GmapsController@index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
