<?php

use App\Http\Controllers\AddController;
use App\Http\Livewire\Additem;
use App\Http\Livewire\ItemForm;
use App\View\Components\dashboard\Download;
use App\View\Components\dashboard\ErrorMessage;
use App\View\Components\dashboard\ItemList;
use App\View\Components\dashboard\ResponseLog;
use App\View\Components\dashboard\Salesofficers;
use App\View\Components\dashboard\Stores;
use App\View\Components\dashboard\Territorywithnumber;
use App\View\Components\dashboard\Territtory;
use App\View\Components\dashboard\VoucherHead;
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
Route::get('/voucher_heads', fn() => Blade::renderComponent(new VoucherHead()))->middleware(['auth'])->name('voucher_heads');
Route::get('/sales_officer', fn() => Blade::renderComponent(new Salesofficers()))->middleware(['auth'])->name('sales_officer');




//! add related routes 
// Route::get('/add_items', fn() => Blade::renderComponent(new ItemForm()))->middleware(['auth'])->name('add_items');
Route::get('/add_items', [AddController::class,'addNewItemPage'])->middleware(['auth'])->name('add_items');
Route::get('/add_territories', [AddController::class,'addNewTerritoryPage'])->middleware(['auth'])->name('add_territories');
Route::get('/add_territories_with_num', [AddController::class,'addNewTerritorywithNumberPage'])->middleware(['auth'])->name('add_territories_with_num');
Route::get('/add_stores', [AddController::class,'addNewStorePage'])->middleware(['auth'])->name('add_stores');
Route::get('/add_sales_officers', [AddController::class,'addNewSalesOfficersPage'])->middleware(['auth'])->name('add_sales_officers');
Route::get('/cancel', [AddController::class,'CancelButton'])->middleware(['auth'])->name('cancel');

Route::get('user-datatables', function () {
    return view('components.dashboard.default');
})->middleware(['auth'])->name('user-datatables');


require __DIR__.'/auth.php';
