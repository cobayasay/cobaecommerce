<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group([
    'middleware'=>'api',
    'prefix'=>'auth',
    // 'namespace' => 'App\Http\Controllers'
], function(){
    Route::post('loginnn',[AuthController::class,'login'])->name('login');

});

Route::group([
    'middleware' => 'api'
], function(){
    Route::resources([
        'categories'=>CategoryController::class
    ]);
});

