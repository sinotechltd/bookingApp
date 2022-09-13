<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Bookingcrud;
use App\Http\Livewire\BookingComponent;
use App\Http\Livewire\ClientEditingFacility;
use App\Http\Livewire\ClientEquipments;
use App\Http\Livewire\ClientHomepage;
use App\Http\Livewire\HONApproval;

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
Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::get('/auth/logout', [MainController::class, 'logout'])->name('auth.logout');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::post('/crud/bookform/save', [MainController::class, 'book'])->name('crud.bookform.save');

Route::group(['middleware' => ['AutCheck']], function () {
    //auth routes
    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');   
    Route::get('/auth/register', [MainController::class, 'register'])->name('auth.login');    
    //New routes with livewire       
    
    Route::get('/',ClientHomepage::class); 
    Route::get('/editing', ClientEditingFacility::class);
    Route::get('/equipments', ClientEquipments::class);
    Route::get('hon', HONApproval::class);
    Route::get('/studio', HONApproval::class);
   
});
