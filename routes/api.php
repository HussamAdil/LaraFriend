<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProfileController;
use Symfony\Component\VarDumper\Caster\ResourceCaster;

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

//auth 

Route::post('/auth/signup', [AuthController::class, 'SignUp'])->name('api.signup');

Route::post('/auth/login', [AuthController::class, 'login']);

Route::post('/auth/logout', [AuthController::class, 'logout']);

// profile 

Route::group(['middleware' => 'auth'] , function()
{
    Route::apiResource('profile',ProfileController::class);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 