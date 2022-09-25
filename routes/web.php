<?php

use App\View\Components\dashboard\Download;
use App\View\Components\dashboard\ErrorMessage;
use App\View\Components\dashboard\ItemList;
use App\View\Components\dashboard\ResponseLog;
use App\View\Components\dashboard\Stores;
use App\View\Components\dashboard\Territorywithnumber;
use App\View\Components\dashboard\Territtory;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/download', fn() => Blade::renderComponent(new Download()))->middleware(['auth'])->name('download');
Route::get('/error_msg', fn() => Blade::renderComponent(new ErrorMessage()))->middleware(['auth'])->name('error_msg');
Route::get('/item', fn() => Blade::renderComponent(new ItemList()))->middleware(['auth'])->name('item');
Route::get('/response_log', fn() => Blade::renderComponent(new ResponseLog()))->middleware(['auth'])->name('response_log');
Route::get('/terittories', fn() => Blade::renderComponent(new Territtory()))->middleware(['auth'])->name('terittories');
Route::get('/terittories-with-number', fn() => Blade::renderComponent(new Territorywithnumber()))->middleware(['auth'])->name('terittories-with-number');
Route::get('/stores', fn() => Blade::renderComponent(new Stores()))->middleware(['auth'])->name('stores');

Route::get('user-datatables', function () {
    return view('components.dashboard.default');
})->middleware(['auth'])->name('user-datatables');

require __DIR__.'/auth.php';
