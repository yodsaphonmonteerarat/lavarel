<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerCRUDController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController; 

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('customers', CustomerCRUDController::class);

Route::get('fetch-tax/{id}', [TaxController::class, 'fetchTaxByCustID'])->name('show.tax');
Route::get('fetch-customer/{id}', [TaxController::class, 'fetchCustIDByTax'])->name('show.taxy');
Route::get('/rolesbyuser/{id}',[RoleController::class,
'getAllRolesByUser']);
Route::get('/usersbyrole/{id}',[RoleController::class,
'getAllUsersByRole']);

Route::get('/post/{id}/comments', [PostController::class,
'getCommentsByPost']);

Route::get('/cust/{id}/post', [PostController::class,
'postByCust']);

Route::get('/getallusers',[UserController::class,'index']);
Route::get('/count-customers', [CustomerController::class,'countCustomers']);
Route::get('/customer-email', function ()
{
return view('request-form');
})->name('request-customer-email');
Route::post('/customer-email', [CustomerController::class,'getCustomerEmail'])->name('get-customer-email');