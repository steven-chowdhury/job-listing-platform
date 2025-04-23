<?php

use App\Http\Controllers\JobPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Job Routes
Route::get('/jobs', [JobPostController::class, 'index']);
Route::get('/company/{companyId}/jobs', [JobPostController::class, 'indexByCompany']);
Route::post('/company/{companyId}/jobs', [JobPostController::class, 'store']);
Route::get('/jobs/{id}', [JobPostController::class, 'show']);
Route::delete('/jobs/{id}', [JobPostController::class, 'destroy']);
Route::put('/jobs/{id}/', [JobPostController::class, 'update']);