<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Livewire\AdminConsole;
use App\Http\Livewire\Assignment;
use App\Http\Livewire\BookingComponent;
use App\Http\Livewire\ClientBookingPage;
use App\Http\Livewire\ClientEditingFacility;
use App\Http\Livewire\ClientEquipments;
use App\Http\Livewire\ClientView;
use App\Http\Livewire\CstoApproveEditView;
use App\Http\Livewire\CstoApproveProdView;
use App\Http\Livewire\CSTOPage;
use App\Http\Livewire\CSTOPApproved;
use App\Http\Livewire\CSTOPRejected;
use App\Http\Livewire\CstorejectEditView;
use App\Http\Livewire\CstorejectProdView;
use App\Http\Livewire\FclientView;
use App\Http\Livewire\HONApproval;
use App\Http\Livewire\HONApproved;
use App\Http\Livewire\HonApproveEditView;
use App\Http\Livewire\HonconfirmApprove;
use App\Http\Livewire\HonconfirmReject;
use App\Http\Livewire\HonEditApprovedView;
use App\Http\Livewire\HonFacApprovedView;
use App\Http\Livewire\HONRejected;
use App\Http\Livewire\HonRejectEditView;
use App\Http\Livewire\TimeTable;
use App\Http\Livewire\TpmApproveEditView;
use App\Http\Livewire\TpmApproveProdView;
use App\Http\Livewire\TPMPage;
use App\Http\Livewire\TPMPApproval;
use App\Http\Livewire\TPMPrejected;
use App\Http\Livewire\TpmRejectEditView;
use App\Http\Livewire\TpmRejectProdView;

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
   //Route::get('/approveline/{id}',[MainController::class, 'aproveline']);
   Route::get('/rejectline/{id}',[MainController::class, 'rejectline']);
   //view routes
   Route::get('view/{id}', [HonFacApprovedView::class, 'viewRecord']); 
   Route::get('eview/{id}', [HonEditApprovedView::class, 'viewRecord']); 
   Route::get('fclientview/{id}', [FclientView::class, 'viewRecord']); 
   Route::get('pclientview/{id}', [ClientView::class, 'viewRecord']); 
   //approve 
   Route::get('/viewLine/{id}',[HonconfirmApprove::class, 'veiwline']);
   Route::post('/approveline',[HonconfirmApprove::class, 'aproveline']);
   //reject    
   Route::get('/rviewline/{id}',[HonconfirmReject::class, 'veiwline']);
   Route::post('/rejectline',[HonconfirmReject::class, 'rejectline']);

   //editing facilities approve 
   Route::get('/vieweditLin/{id}',[HonApproveEditView::class, 'veiwline']);
   Route::post('/approveditline',[HonApproveEditView::class, 'aproveline']);
   //editing facilities reject    
   Route::get('/vieweditline/{id}',[HonRejectEditView::class, 'veiwline']);
   Route::post('/rejecteditline',[HonRejectEditView::class, 'rejectline']);


   //editing facilities tpm approve 
   Route::get('/tpmvieweditLin/{id}',[TpmApproveEditView::class, 'veiwline']);
   Route::post('/tpmapproveditline',[TpmApproveEditView::class, 'aproveline']);
   //editing facilities tpmreject    
   Route::get('/viewedittpmline/{id}',[TpmRejectEditView::class, 'veiwline']);
   Route::post('/rejectetpmditline',[TpmRejectEditView::class, 'rejectline']);
   //editing production tpm approve 
   Route::get('/productionlineView/{id}',[TpmApproveProdView::class, 'veiwline']);
   Route::post('/productionlineApprove',[TpmApproveProdView::class, 'aproveline']);
   //editing production tpmreject    
   Route::get('/productionlineViewr/{id}',[TpmRejectProdView::class, 'veiwline']);
   Route::post('/prodrejectline',[TpmRejectProdView::class, 'rejectline']);

   //editing facilities csto approve 
   Route::get('/cstoapprovelineview/{id}',[CstoApproveEditView::class, 'veiwline']);
   Route::post('/cstoapproveditline',[CstoApproveEditView::class, 'aproveline']);
   //editing facilities csto reject    
   Route::get('/cstorejectlineview/{id}',[CstorejectEditView::class, 'veiwline']);
   Route::post('/cstorejecteditline',[CstorejectEditView::class, 'rejectline']);

   
   //editing production csto approve 
   Route::get('/cstoapprovelinePview/{id}',[CstoApproveProdView::class, 'veiwline']);
   Route::post('/cstoapproveproduct',[CstoApproveProdView::class, 'aproveline']);
   //editing production csto reject    
   Route::get('/ctorejectlineview/{id}',[CstorejectProdView::class, 'veiwline']);
   Route::post('/ctorejectlineview',[CstorejectProdView::class, 'rejectline']);

   
   //eding facilities booking
   Route::get('/fapproveline/{id}',[MainController::class, 'faproveline']);
   Route::get('/frejectline/{id}',[MainController::class, 'frejectline']);
   //TPM routes
   Route::get('tpmpage', TPMPage::class);
   Route::get('tpm', TPMPage::class);
   Route::get('tpmapproved', TPMPApproval::class);
   Route::get('/tpmrejected', [TPMPrejected::class,'index' ]);
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
  //timetable routes
  Route::post('assignmona/{id}',[MainController::class, 'assignEditorMonMoA'])->name('assignmoa');  

});
