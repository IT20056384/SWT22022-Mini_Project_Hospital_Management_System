<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCOntroller;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SubscribeController;

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

// Route::get('/', function () {
//     return view('Home');
// });

Route::get('/',[UserCOntroller::class,'Home'])->name('Home');




Route::get('PatientRegister',[UserController::class,'PatientRegister']);
Route::get('DoctorRegister',[UserController::class,'DoctorRegister']);
Route::get('DoctorLogin',[UserController::class,'DoctorLogin']);
Route::get('PatientLogin',[UserController::class,'PatientLogin']);
Route::get('PatientDashboard',[UserController::class,'PatientDashboard']);
Route::get('DoctorDashboard',[UserController::class,'DoctorDashboard']);
Route::get('EmployeeDashboard',[UserController::class,'EmployeeDashboard']);
Route::get('Booking',[UserController::class,'Booking']);
// Route::get('edit',[UserController::class,'edit']);

Route::post('Doctor-Register',[DoctorController::class,'DoctorReg'])->name('DoctorRegistration');
Route::post('Doctor-Login',[DoctorController::class,'DoctorLogin'])->name('Doctor-Login');

Route::post('Patient-Register',[PatientController::class,'PatientReg'])->name('PatientRegistration');
Route::post('Patient-Login',[PatientController::class,'PatientLogin'])->name('Patient-Login');
Route::post('Patient-booking',[PatientController::class,'PatientBooking'])->name('Patient-booking');

Route::get('display',[DoctorController::class,'display']);


Route::get('edit-booking/{id}', [PatientController::class, 'edit']);
Route::put('update-booking/{id}', [PatientController::class, 'update']);


Route::get('EmployeeRegister',[EmployeeController::class,'EmployeeRegister']);
Route::get('EmployeeLogin',[EmployeeController::class,'EmployeeLogin']);


Route::post('Employee-register',[EmployeeController::class,'EmpRegister'])->name('Employee-register');
Route::post('Employee-login',[EmployeeController::class,'EmpLogin'])->name('Employee-login');

Route::get('PatientsDetails',[PatientController::class,'PatientDetails']);
Route::get('delete-booking/{id}', [PatientController::class, 'destroy']);




//

Route::get('user-booking',[PatientController::class,'PatientBookings']);
Route::get('UserBookings',[PatientController::class,'UserBookings']);
Route::get('Booking',[PatientController::class,'Booking']);


Route::post('user-contact',[ContactController::class,'UserContact'])->name('user-contact');
Route::post('user-subscribe',[SubscribeController::class,'UserSubscribe'])->name('user-subscribe');

