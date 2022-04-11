<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});
// Route::get('/taskList', function () {
//     return Inertia::render('taskList');
// })->middleware(['auth', 'verified'])->name('taskList');


// Route::get('/{any}', function () {
//     return view('app');
// })->where('any', '.*');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tasks', [TasksController::class, 'index'])->name('tasks');
Route::get('/task/{task}', [TasksController::class, 'show'])->name('task.show');

// Route::resource('/tasks', TasksController::class)
//     ->middleware(['auth', 'verified'])
//     ->names([
//         'index' => 'tasks',
//         'show' => 'task.show'
//         // 'create' => 'task.create',
//         // 'edit' => 'task.edit',
//         // 'update' => 'task.update',
//         // 'destroy' => 'task.destroy',
//         // 'store' => 'task.store'
//     ]);

require __DIR__ . '/auth.php';
