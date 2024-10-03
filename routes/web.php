<?php

use App\Http\Controllers\API\V1\APIUsuarioController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/api/v1/usuarios',[APIUsuarioController::class, 'index'])->name('api.usuarios.index');
Route::get('/api/v1/usuarios/{id}',[APIUsuarioController::class, 'show'])->name('api.usuarios.show');
