<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterAPIController;
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\UserAPIController;
use App\Http\Controllers\ProjectAPIController;
use App\Http\Controllers\TaskAPIController;
use App\Http\Controllers\MessageAPIController;
use App\Http\Controllers\HomeAPIController;

//New User Registration
Route::get('/register/show',[RegisterAPIController::class,'show']);
Route::post('/register/add',[RegisterAPIController::class,'add']);

//User Login
Route::post('/login',[LoginAPIController::class,'login']);

//User CRUD
Route::get('/user/show',[UserAPIController::class,'show']);
Route::get('/user/get/{id}',[UserAPIController::class,'get']);
Route::post('/user/add',[UserAPIController::class,'add']);
Route::post('/user/update/{id}',[UserAPIController::class,'update']);
Route::get('/user/delete/{id}',[UserAPIController::class,'delete']);

//Project CRUD
Route::get('/project/show',[ProjectAPIController::class,'show']);
Route::get('/project/get/{id}',[ProjectAPIController::class,'get']);
Route::post('/project/add',[ProjectAPIController::class,'add']);
Route::post('/project/update/{id}',[ProjectAPIController::class,'update']);
Route::get('/project/delete/{id}',[ProjectAPIController::class,'delete']);

//Task CRUD
Route::get('/task/show',[TaskAPIController::class,'show']);
Route::get('/task/get/{id}',[TaskAPIController::class,'get']);
Route::post('/task/add',[TaskAPIController::class,'add']);
Route::post('/task/update/{id}',[TaskAPIController::class,'update']);
Route::get('/task/delete/{id}',[TaskAPIController::class,'delete']);

//Message
Route::post('/message',[MessageAPIController::class,'message']);

//Email
Route::post('/email',[HomeAPIController::class,'email']);

//profile
Route::get('/profile',[HomeAPIController::class,'profille']);

//Count Function
Route::get('usercount',[HomeAPIController::class,'usercount']);
Route::get('projectcount',[HomeAPIController::class,'projectcount']);
Route::get('taskcount',[HomeAPIController::class,'taskcount']);