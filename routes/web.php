<?php

use App\Http\Controllers\ApointmentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DoctorsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Doctors;

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
    return view('login');
});
Route::get('/user_page' , function(){
   
    $user = Auth::user();
     return view('Admin.User', ['user' => $user]);
 
 })->middleware('auth'); 

Route::post('/login' , [Controller::class , 'login']);



Route::get('/create' , [Controller::class , 'createpage'] );
Route::view('/Create_patient' , 'Admin.patientForm')->name('CP');
Route::view('/Create_Doctor' , 'Admin.DoctorForm')->name('CD');

Route::post('/createDoctor' ,[Controller::class , 'createD'] );

Route::post('/create_patient' , [Controller::class , 'createP']);

Route::get('/Doctor' , [Controller::class , 'Doctors'] );
Route::get('/Patient' , [Controller::class , 'Patients'] );
Route::post('/logout' , [Controller::class , 'logout']);
Route::get('/Doctor/{id}' , [Controller::class , 'ShowD']);
Route::get('/Patient/{id}' , [Controller::class , 'ShowP']);

Route::delete('/Delete/{Doctor}' , [DoctorsController::class , 'destroy']);
Route::get('/Deletep/{id}' , [Controller::class , 'destroypatient']);
Route::get('/editDoctor/{id}',[DoctorsController::class,'edit']);
Route::patch('UpdateDoctor/{id}' , [DoctorsController::class , 'update']);
Route::patch('Updatepatient/{id}' , [Controller::class , 'updatep']);
Route::get('editpatient/{id}' , [Controller::class , 'editp']);
Route::get('createApointment' , [ApointmentController::class , 'create'])->name('CA');
Route::post('createPointment' , [ApointmentController::class , 'store']);
Route::get('Apointment' , [ApointmentController::class , 'index']);
Route::get('Apointment/{id}' , [ApointmentController::class , 'show']);
Route::patch('UpdateApointment/{id}' , [ApointmentController::class , 'update']);
Route::delete('DeleteApointment/{id}' , [ApointmentController::class , 'destroy']);
Route::get('/user/appointment' , [Controller::class , 'getallApointment']);
Route::get('/user/Doctor' , [Controller::class , 'getallDoctor']);
Route::get('/user/Patients' , [Controller::class , 'getallPatient']);



