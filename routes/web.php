<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Todos;
use App\Http\Livewire\ShowAllTodo;
use App\Http\Livewire\ImportantTask;
use App\Http\Livewire\Profile;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });


Route::get('/todos',Todos::class)->middleware('auth')->name('todos');
Route::get('/show',ShowAllTodo::class)->middleware('auth')->name('show');
Route::get('/important',ImportantTask::class)->middleware('auth')->name('important');
Route::get('/profile',Profile::class)->middleware('auth')->name('profile');
