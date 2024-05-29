<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $tasks=Task::where('UserID',auth()->id())->get();
    return view('dashboard',['tasks'=>$tasks]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/createe', [TaskController::class, 'createe']);
Route::post('/createtask', [TaskController::class, 'createtask']);
Route::put('/edittask/{task}',[TaskController::class,'editinsert']);

Route::post('/editiinsert',[TaskController::class,'edit']);
Route::delete('/deletee/{task}', [TaskController::class, 'deletetask']);
Route::post('/tedit/{task}', [TaskController::class, 'tedit']);


require __DIR__.'/auth.php';
