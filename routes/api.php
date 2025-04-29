<?php

use App\Http\Controllers\ATSController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\CandidateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Company Routes
Route::get('/companies', [CompanyController::class, 'index']);
Route::post('/companies', [CompanyController::class, 'store']);
Route::get('/companies/{id}', [CompanyController::class, 'show']);
Route::delete('/companies/{id}', [CompanyController::class, 'destroy']);
Route::put('/companies/{id}/', [CompanyController::class, 'update']);

// Job Routes
Route::get('/jobs', [JobPostController::class, 'index']);
Route::get('/companies/{companyId}/jobs', [JobPostController::class, 'indexByCompany']);
Route::post('/companies/{companyId}/jobs', [JobPostController::class, 'store']);
Route::get('/jobs/{id}', [JobPostController::class, 'show']);
Route::delete('/jobs/{id}', [JobPostController::class, 'destroy']);
Route::put('/jobs/{id}/', [JobPostController::class, 'update']);

// ATS Routes
Route::post('/jobs/best_match', [ATSController::class, 'bestJobMatch']);

// Candidate Routes
Route::get('/candidates', [CandidateController::class, 'index']);
Route::post('/candidates', [CandidateController::class, 'store']);
Route::get('/candidates/{id}', [CandidateController::class, 'show']);
Route::delete('/candidates/{id}', [CandidateController::class, 'destroy']);
Route::put('/candidates/{id}/', [CandidateController::class, 'update']);
