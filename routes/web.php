<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Livewire\AdminConsole;
use App\Http\Livewire\Assignment;
use App\Http\Livewire\BookingComponent;
use App\Http\Livewire\ClientBookingPage;
use App\Http\Livewire\ClientEditingFacility;
use App\Http\Livewire\ClientEquipments;
use App\Http\Livewire\CSTOPage;
use App\Http\Livewire\CSTOPApproved;
use App\Http\Livewire\CSTOPRejected;
use App\Http\Livewire\HONApproval;
use App\Http\Livewire\HONApproved;
use App\Http\Livewire\HONRejected;
use App\Http\Livewire\TimeTable;
use App\Http\Livewire\TPMPage;
use App\Http\Livewire\TPMPApproval;

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
    
    Route::get('/',ClientBookingPage::class); 
    Route::get('/editing', ClientEditingFacility::class);
    Route::get('/equipments', ClientEquipments::class);
   
    Route::get('book', BookingComponent::class);
    Route::get('/studio', HONApproval::class);
   //Admin routes
   Route::get('/admin',AdminConsole::class);
   //HONroutes
   Route::get('hon', HONApproval::class);
   Route::get('approved', HONApproved::class);
   Route::get('rejected', HONRejected::class);
   Route::get('/approveline/{id}',[MainController::class, 'aproveline']);
   Route::get('/rejectline/{id}',[MainController::class, 'rejectline']);
   //eding facilities booking
   Route::get('/fapproveline/{id}',[MainController::class, 'faproveline']);
   Route::get('/frejectline/{id}',[MainController::class, 'frejectline']);
   //TPM routes
   Route::get('tpmpage', TPMPage::class);
   Route::get('tpm', TPMPage::class);
   Route::get('tpmapproved', TPMPApproval::class);
   Route::get('tmprejected', TPMPApproval::class);
   Route::get('/tpmapproveline/{id}',[MainController::class, 'tpmaproveline']);
   Route::get('/tpmrejectline/{id}',[MainController::class, 'tpmrejectline']);
   //eding facilities booking
   Route::get('/ftpmapproveline/{id}',[MainController::class, 'ftpmaproveline']);
   Route::get('/ftpmrejectline/{id}',[MainController::class, 'ftpmrejectline']);
  // CSTO routes
  Route::get('csto', CSTOPage::class);
  Route::get('ctopage', CSTOPage::class);
  Route::get('ctoapproved', CSTOPApproved::class);
  Route::get('ctorejected', CSTOPRejected::class);
  Route::get('/cstoapproveline/{id}',[MainController::class, 'cstoaproveline']);
  Route::get('/ctorejectline/{id}',[MainController::class, 'cstorejectline']);
  Route::get('/assign',Assignment::class);
  //eding facilities booking
  Route::get('/fcstoapproveline/{id}',[MainController::class, 'fcstoaproveline']);
  Route::get('/fctorejectline/{id}',[MainController::class, 'fcstorejectline']);
  Route::get('/timetable',TimeTable::class);
  

});
