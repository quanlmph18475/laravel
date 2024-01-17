<?php

use Illuminate\Support\Facades\Route;

Route::get('categories', [App\Http\Controllers\CategoryControler::class, 'index']);
Route::get('categories/create', [App\Http\Controllers\CategoryControler::class, 'create']);
Route::post('categories/create', [App\Http\Controllers\CategoryControler::class, 'store']);
Route::get('categories/{id}/edit', [App\Http\Controllers\CategoryControler::class, 'edit']);
Route::put('categories/{id}/edit', [App\Http\Controllers\CategoryControler::class, 'update']);
Route::get('categories/{id}/delete', [App\Http\Controllers\CategoryControler::class, 'delete']);


Route::get('/', function () {
    return view('welcome');
});
