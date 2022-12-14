<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\CursosController;

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

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuario.index');
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuario.create');
Route::post('/usuarios/store', [UsuariosController::class, 'store'])->name('usuario.store');
Route::get('/usuarios/edit/{id}', [UsuariosController::class, 'edit'])->name('usuario.edit');
Route::post('/usuarios/update/{id}', [UsuariosController::class, 'update'])->name('usuario.update');
Route::get('/usuarios/destroy/{id}', [UsuariosController::class, 'destroy'])->name('usuario.destroy');

Route::get('/professores', [ProfessoresController::class, 'index'])->name('professor.index');
Route::get('/professores/create', [ProfessoresController::class, 'create'])->name('professor.create');
Route::post('/professores/store', [ProfessoresController::class, 'store'])->name('professor.store');
Route::get('/professores/edit/{id}', [ProfessoresController::class, 'edit'])->name('professor.edit');
Route::post('/professores/update/{id}', [ProfessoresController::class, 'update'])->name('professor.update');
Route::get('/professores/destroy/{id}', [ProfessoresController::class, 'destroy'])->name('professor.destroy');

Route::get('/alunos', [AlunosController::class, 'index'])->name('aluno.index');
Route::get('/alunos/create', [AlunosController::class, 'create'])->name('aluno.create');
Route::post('/alunos/store', [AlunosController::class, 'store'])->name('aluno.store');
Route::get('/alunos/edit/{id}', [AlunosController::class, 'edit'])->name('aluno.edit');
Route::post('/alunos/update/{id}', [AlunosController::class, 'update'])->name('aluno.update');
Route::get('/alunos/destroy/{id}', [AlunosController::class, 'destroy'])->name('aluno.destroy');

Route::get('/cursos', [CursosController::class, 'index'])->name('curso.index');
Route::get('/cursos/create', [CursosController::class, 'create'])->name('curso.create');
Route::post('/cursos/store', [CursosController::class, 'store'])->name('curso.store');
Route::get('/cursos/edit/{id}', [CursosController::class, 'edit'])->name('curso.edit');
Route::post('/cursos/update/{id}', [CursosController::class, 'update'])->name('curso.update');
Route::get('/cursos/destroy/{id}', [CursosController::class, 'destroy'])->name('curso.destroy');