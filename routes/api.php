<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SousUniteOrganisationnelleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePersonnelController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\BesoinController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:api'])->group(function () {
        // SousUniteOrganisationnelle Routes
    Route::apiResource('suo', SousUniteOrganisationnelleController::class);
    // Route::get('suo/{id}', [SousUniteOrganisationnelleController::class, 'afficher']);
    
    // User Routes
    Route::apiResource('users', UserController::class);
    
    // Role Routes
    Route::apiResource('roles', RoleController::class);
    
    // RolePersonnel Routes
    Route::apiResource('rolepersonnels', RolePersonnelController::class);
    
    // Session Routes
    Route::apiResource('sessions', SessionController::class);
    
    // Besoin Routes
    Route::apiResource('besoins', BesoinController::class);
    
    // Validation Routes
    Route::apiResource('validations', ValidationController::class);
    
    
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
});
