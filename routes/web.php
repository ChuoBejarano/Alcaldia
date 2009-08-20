<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'] )->name('home');

Route::get('/Registrar', [App\Http\Controllers\HomeController::class, 'create'])->name('user.create');
Route::post('/Registrar',[App\Http\Controllers\HomeController::class, 'store'])->name('user.store');

Route::get('/Modificar/{id}', [App\Http\Controllers\HomeController::class, 'modify'])->name('user.modify');
Route::patch('/Modificar/{id}',[App\Http\Controllers\HomeController::class, 'update'])->name('user.update');

Route::get('/Eliminar/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('user.delete');
Route:: delete('/Eliminar/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('user.destroy');

Route::get('/Contacto', [App\Http\Controllers\HomeController::class, 'contacto'])->name('contacto');

Route::get('/Historial', [App\Http\Controllers\HomeController::class, 'historial'])->name('historial');
Route::get('/Historial/Buscar', [App\Http\Controllers\HomeController::class, 'buscar'])->name('buscar');

Route::get('/Documentación', [App\Http\Controllers\HomeController::class, 'documentacion'])->name('documentacion');
Route::get('/Acerca', [App\Http\Controllers\HomeController::class, 'informacion'])->name('informacion');

/*Route::get('/permisos/{id}', function($id)
{
	$role_id = $id;

	$permisos = Role::find($role_id)->permission;

	
    return Response::json($permisos);
});*/