<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ItemController;
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

Route::prefix('auth')->group(function(){
    Route::get('/', [AuthController::class, 'signInPage'])->name('signIn.index');
    Route::post('/home', [AuthController::class, 'signIn'])->name('signIn');
    Route::get('/signUp', [AuthController::class, 'signUpPage'])->name('signUp.index');
    Route::post('/signUp', [AuthController::class, 'signUp'])->name('signUp');
    Route::get('/signOut', [AuthController::class, 'signOut'])->name('signOut');
});

Route::prefix('admin')->group(function(){
    Route::get('/homepage', [AdminController::class, 'homepage'])->name('homepage.employee');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile.index.employee');
    Route::get('/profile/updateProfile/{id}', [AdminController::class, 'updateProfilePage'])->name('profile.update.employee');
    Route::post('/profile/updateProfile', [AdminController::class, 'updateProfile'])->name('profile.update.employee');
    Route::get('/user', [AdminController::class, 'userData'])->name('userData');
    Route::get('/addUser', [AdminController::class, 'addUserPage'])->name('addUser.index.employee');
    Route::post('/addUser', [AdminController::class, 'addUser'])->name('addUser.employee');
    Route::get('/user/delete/{id}', [AdminController::class, 'deleteUser'])->name('userData.delete.employee');
    Route::get('/transaction', [AdminController::class, 'transaction'])->name('transaction.employee');
    Route::get('/transaction/delete/{id}', [AdminController::class, 'deleteTransaction'])->name('transaction.delete.employee');
    Route::get('/listItem/{type}', [AdminController::class, 'itemRentPage']);  
    Route::get('/addUser', [AdminController::class, 'addEmployeePage'])->name('addEmployee.index.admin');
    Route::post('/addUser', [AdminController::class, 'addEmployee'])->name('addEmployee');  
    Route::get('/user/delete/{id}', [AdminController::class, 'deleteEmployee'])->name('userData.delete.admin');
});

Route::prefix('employee')->group(function(){
    Route::get('/homepage', [EmployeeController::class, 'homepage'])->name('homepage.employee');
    Route::get('/profile', [EmployeeController::class, 'profile'])->name('profile.index.employee');
    Route::get('/profile/updateProfile/{id}', [EmployeeController::class, 'updateProfilePage'])->name('profile.update.employee');
    Route::post('/profile/updateProfile', [EmployeeController::class, 'updateProfile'])->name('profile.update.employee');
    Route::get('/user', [EmployeeController::class, 'userData'])->name('userData');
    Route::get('/addUser', [EmployeeController::class, 'addUserPage'])->name('addUser.index.employee');
    Route::post('/addUser', [EmployeeController::class, 'addUser'])->name('addUser.employee');
    Route::get('/user/delete/{id}', [EmployeeController::class, 'deleteUser'])->name('userData.delete.employee');
    Route::get('/transaction', [EmployeeController::class, 'transaction'])->name('transaction.employee');
    Route::get('/transaction/delete/{id}', [EmployeeController::class, 'deleteTransaction'])->name('transaction.delete.employee');
    Route::get('/listItem/{type}', [EmployeeController::class, 'itemRentPage']);    
});

Route::prefix('item')->group(function(){
    Route::get('/', [ItemController::class, 'index'])->name('item.employee');
    Route::get('/addItem', [ItemController::class, 'addItemPage'])->name('addItem.index.employee');
    Route::post('/addItem', [ItemController::class, 'addItem'])->name('addItem.employee');
    Route::get('/update/{id}', [ItemController::class, 'updateItemPage'])->name('updateItem.index.employee');
    Route::post('/update', [ItemController::class, 'updateItem'])->name('updateItem.employee');
    Route::get('/delete/{id}', [ItemController::class, 'deleteItem'])->name('item.delete.employee');
});

Route::prefix('customer')->group(function(){
    Route::get('/homepage', [CustomerController::class, 'homepage'])->name('homepage.customer');
    Route::get('/profile', [CustomerController::class, 'profile'])->name('profile.index.customer');
    Route::get('/profile/updateProfile/{id}', [CustomerController::class, 'updateProfilePage'])->name('profile.update.customer');
    Route::post('/profile/updateProfile', [CustomerController::class, 'updateProfile'])->name('profile.update.customer');
    Route::get('/listItem/{type}', [CustomerController::class, 'itemRentPage']);
    Route::post('/cart', [CustomerController::class, 'cart'])->name('cart');
    Route::get('/cart', [CustomerController::class, 'cartPage'])->name('cart.index');
    Route::get('/cart/delete/{id}', [CustomerController::class, 'deleteCart'])->name('deleteCart');
    Route::post('transaction', [CustomerController::class, 'transaction'])->name('transaction');
    Route::get('/transaction', [CustomerController::class, 'transactionPage'])->name('transaction.index');
});

// Route::get('/', function () {
//     return view('layout/admin/addEmployee');
// });