<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [UsuariosController::class, 'mostrar_login'])->name('login');

Route::post('/login', [UsuariosController::class, 'loguear_usuario'])->name('login.post');

Route::get('/Registrar', [UsuariosController::class, 'registrar'])->name('registrar');

Route::post('/RegistrarUsuario', [UsuariosController::class, 'registrar_usuario']);

Route::get('/cambiarpassword', [UsuariosController::class, 'mostrar_cambiar_password']);

Route::post('/cambiarpassword', [UsuariosController::class, 'cambiar_password']);