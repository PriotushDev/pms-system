<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectMemberController;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//custome route start
Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/projects/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
Route::post('/projects/update/{id}', [ProjectController::class, 'update_project'])->name('project.update');


Route::get('/add/task/{project_id}', [TaskController::class, 'add_task'])->name('task.add');
Route::post('task', [TaskController::class, 'store'])->name('task.store');


Route::get('/project/member/add/{user_id}', [ProjectMemberController::class, 'add_project_member'])->name('add.project.member');

//Mail Controller
Route::get('/demo-email', [MailController::class, 'demo_email'])->name('demo.email');

Route::post('/demo-email-send', [MailController::class, 'demo_email_send'])->name('demo.email.send');

Route::get('/dmeo-email/{id}', [MailController::class, 'send_email'])->name('send.email');






















