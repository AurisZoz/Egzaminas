<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\CustomersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function(){

Route::get('/companies/create',[ CompaniesController::class, 'create'])->name('companies.create');
 Route::post('/companies/save',[ CompaniesController::class, 'save'])->name('companies.save');
 Route::get('/companies/{id}/edit',[ CompaniesController::class, 'edit'])->name('companies.edit');
 Route::post('/companies/{id}/update',[CompaniesController::class,'update'])->name('companies.update');
 Route::get('/companies/{id}/delete',[CompaniesController::class,'delete'])->name('companies.delete');

 Route::resource('customers', CustomersController::class);  

 Route::get('/companies',[CompaniesController::class, 'index'])->name('companies.index');
 Route::get('/customers',[CustomersController::class, 'index'])->name('customers.index');

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
