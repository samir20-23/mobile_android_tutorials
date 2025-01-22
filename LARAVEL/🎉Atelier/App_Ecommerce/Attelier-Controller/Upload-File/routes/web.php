<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/file-upload', [FileUploadController::class, 'showForm']);
Route::post('/file-upload', [FileUploadController::class, 'upload']);
