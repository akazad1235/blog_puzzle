<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\ManageBlogController;
use App\Http\Controllers\Api\CommentController;

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
    //return auth()->user()->id;



});
Route::middleware('auth:api')->group(function () {


});
Route::post('/user/blog/post',[ManageBlogController::class,'store'])->middleware('auth:api');
//for comment & consume post id
Route::post('/comment/{id}',[CommentController::class,'comment'])->middleware('auth:api');

//filter blog post
Route::post('/blog/post/filter',[ManageBlogController::class,'filter']);
Route::post('/user/logout',[ManageBlogController::class,'logout'])->middleware('auth:api');


Route::post('/user/register',[RegisterController::class,'store']);
Route::post('/user/login',[LoginController::class,'userLogin']);


Route::get('/all/blog/post',[ManageBlogController::class,'index']);



