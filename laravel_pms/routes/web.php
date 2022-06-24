<?php

use App\Http\Controllers\HeadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/* Signup, Login & Dashboard Starts */
Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/login-submit',[LoginController::class,'loginsubmit'])->name('login-submit');

Route::get('/signup',[LoginController::class,'signup'])->name('signup');
Route::post('/signup-submit',[LoginController::class,'signupsubmit'])->name('signup-submit');

Route::get('/home',[HomeController::class,'dashboard'])->name('home');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
/* Signup, Login & Dashboard Ends */

/* Profile Controls Start */
Route::get('/profile',[HeadController::class,'profile'])->name('profile');
Route::post('/profile-submit/{id}',[HeadController::class,'profilesubmit'])->name('profile-submit');
/* Profile Controls End */

/* User Controls Start */
Route::get('/pending-user',[UsersController::class,'pendinguser'])->name('pending-user');

Route::post('/confirm-user',[UsersController::class,'confirmuser'])->name('confirm-user');
Route::get('/reject-user/{id}',[UsersController::class,'rejectuser'])->name('reject-user');

Route::get('/create-user',[UsersController::class,'createuser'])->name('create-user');
Route::post('/createuser-submit',[UsersController::class,'createusersubmit'])->name('createuser-submit');

Route::get('/user-list',[UsersController::class,'userlist'])->name('user-list');

Route::get('/edit-user/{id}',[UsersController::class,'edituser'])->name('edit-user');
Route::post('/update-user/{id}',[UsersController::class,'updateuser'])->name('update-user');
Route::get('/delete-user/{id}',[UsersController::class,'deleteuser'])->name('delete-user');
/* User Controls End */

/* Project Controls Start */
Route::get('/create-project',[ProjectController::class,'createproject'])->name('create-project');
Route::post('/createproject-submit',[ProjectController::class,'createprojectsubmit'])->name('createproject-submit');

Route::get('/project-list',[ProjectController::class,'projectlist'])->name('project-list');

Route::get('/modify-project/{id}',[ProjectController::class,'modifyproject'])->name('modify-project');
Route::post('/modifyproject-submit/{id}',[ProjectController::class,'modifyprojectsubmit'])->name('modifyproject-submit');
Route::get('/delete-project/{id}',[ProjectController::class,'deleteproject'])->name('delete-project');
/* Project Controls End */

/* Task Controls Start */
Route::get('/create-task',[TasksController::class,'createtask'])->name('create-task');
Route::post('/createtask-submit',[TasksController::class,'createtasksubmit'])->name('createtask-submit');

Route::get('/task-list',[TasksController::class,'tasklist'])->name('task-list');

Route::get('/finished-task/{id}',[TasksController::class,'finishedtask'])->name('finished-task');
Route::post('/finishedtask-submit/{id}',[TasksController::class,'finishedtasksubmit'])->name('finishedtask-submit');
Route::get('/delete-task/{id}',[TasksController::class,'deletetask'])->name('delete-task');
/* Task Controls End */

/* Message & Notifications Controls Start */
Route::get('/message',[MessageController::class,'message'])->name('message');
Route::post('/send-message',[MessageController::class,'sendmessage'])->name('send-message');
Route::get('/delete-message/{id}',[MessageController::class,'deletemessage'])->name('delete-message');

Route::get('/message-list',[MessageController::class,'messagelist'])->name('message-list');
/* Message & Notifications Controls End */

/* Feedback Controls Start */
Route::get('/feedback',[FeedbackController::class,'feedback'])->name('feedback');
Route::post('/feedback-send',[FeedbackController::class,'feedbacksend'])->name('feedback-send');
/* Feedback Controls End */