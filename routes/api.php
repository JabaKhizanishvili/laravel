<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/list/{id?}', [Users::class, 'list'])->where('id', '[0-9]+');
Route::post('/add', [Users::class, 'post']);

Route::put('/edit/{id?}', [Users::class, 'edit'])->where('id', '[0-9]+');
Route::delete('/del/{id?}', [Users::class, 'del'])->where('id', '[0-9]+');
