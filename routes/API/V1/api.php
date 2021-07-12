<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResources([
    "login"       => LoginController::class,
    "register"    => RegisterController::class,
    "profile"     => ProfileController::class,
    "projects"    => ProjectController::class,
    "business"    => BusinessController::class,
    "investment"  => InvestmentController::class
]);
Route::get('/api/auth={auth}',[\App\Http\Controllers\Api\V1\LoginController::class,"login_use_soc"]);
Route::get('/user/destroy',[\App\Http\Controllers\Api\V1\LoginController::class,"destroy"]);
Route::post('/investment/invest',[\App\Http\Controllers\Api\V1\InvestmentController::class,'invest']);
Route::get('/investment/change_status/{id}',[\App\Http\Controllers\Api\V1\InvestmentController::class,'change_status']);
Route::get('/business/change_status/{id}',[\App\Http\Controllers\Api\V1\BusinessController::class,'change_status']);
Route::get('/business/purchase/{id}',[\App\Http\Controllers\Api\V1\BusinessController::class,'purchase']);
Route::get('/business/sentence/{id}',[\App\Http\Controllers\Api\V1\BusinessController::class,'sentence']);
Route::post('/profile/company',[\App\Http\Controllers\Api\V1\CompanyController::class,'store']);
Route::get('/projects/{id}/investors',[\App\Http\Controllers\Api\V1\ProjectController::class,'showInvestors']);
Route::get('/profile/my-projects/{user_id}',[App\Http\Controllers\Api\V1\ProfileController::class ,'myProjectsShow']);
Route::post('/register/set-role',[App\Http\Controllers\Api\V1\RegisterController::class ,'set_role']);
