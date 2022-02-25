<?php

use App\Http\Controllers\AnotherTestModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\TrialController;
use App\Http\Controllers\ForTrialModelController;
use App\Models\AnotherTestModel;


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

Route::post("add",[TestController::class, 'add']);
Route::get('get_data', [TestController::class, 'index']);

Route::resource('testing', TestingController::class);

Route::resource('fortrial', ForTrialModelController::class);

Route::resource('anothertest', AnotherTestModelController::class);

