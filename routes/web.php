<?php

use App\Http\Controllers\TerminalContoller;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SalesTerController;
use App\Http\Controllers\SalesRepController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\salesManController;
use App\Http\Controllers\SalesController;
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
Route::view('/', 'layout.index');
Route::resource('branch', BranchController::class);
Route::resource('region', RegionController::class);
Route::resource('company', CompanyController::class);
Route::resource('category', CategoryController::class);
Route::resource('terminal', TerminalContoller::class);
Route::resource('salesTr', SalesTerController::class);
Route::resource('salesRep', SalesRepController::class);
Route::resource('position', PositionController::class);
Route::resource('route', RouteController::class);
Route::resource('family', FamilyController::class);
Route::resource('product', ProductController::class);
Route::resource('salesMan', salesManController::class);
Route::resource('sales', SalesController::class);