<?php

use App\Http\Controllers\APIResourceController54;
use App\Http\Controllers\APISanctumController55;
use App\Http\Controllers\GetAPIController;
use App\Http\Controllers\PostAPIController;
use App\Http\Controllers\TestAPIController47;
use App\Http\Controllers\UploadFilewithAPIController56;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::get("data",[TestAPIController47::class,'test']);

    Route::get("getapi",[GetAPIController::class,'test']);

    Route::post("postapi",[PostAPIController::class,'insert']);

    Route::put("putapi",[PostAPIController::class,'update']);

    Route::delete("deleteapi/{id}",[PostAPIController::class,'delete']);

    Route::get("searchapi/{name}",[PostAPIController::class,'search']);

    Route::post("validateapi",[PostAPIController::class,'testData']);

    Route::apiResource("resource",APIResourceController54::class);
    });


Route::post("login",[APISanctumController55::class,'index']);

Route::post("uploadfile",[UploadFilewithAPIController56::class,'upload']);




