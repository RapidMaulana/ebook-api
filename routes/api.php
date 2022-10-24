<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

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

Route::get('me',[AuthController::class, 'me']);

Route::resource('book', BookController::class) -> except([
    'create', 'edit'
]);
// Route::get('me',[AuthController::class, 'me']);
// Route::post('me',[AuthController::class, 'me']);
// Route::put('me',[AuthController::class, 'me']);
// Route::delete('me',[AuthController::class, 'me']);
