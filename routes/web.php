<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Leave_typeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth;


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

Route::get('/login', function () {
    return view('admin');
})->name('admin.login');

Route::post('/admin/store',[AdminController::class,'store'])->name('admin.store');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){


Route::get('/', function () {
    return view('main');
})->name('admin.dashboard');


Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');

// Route::post('/login/store',[LoginController::class,'store'])->name('login.store');


Route::get('/employee',[EmployeeController::class,'employee'])->name('employee');
Route::get('/employee_add',[EmployeeController::class,'employee_add'])->name('employee_add');
//database
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
Route::get('/employeee/view{employee_id}',[EmployeeController::class,'view'])->name('employee.view');
Route::get('/employeee/delete{employee_id}',[EmployeeController::class,'delete'])->name('employee.delete');



Route::get('/department',[DepartmentController::class,'department'])->name('department');
Route::get('/department_add',[DepartmentController::class,'department_add'])->name('department_add');
Route::post('/department/store',[DepartmentController::class,'store'])->name('department.store');


Route::get('/designation',[DesignationController::class,'designation'])->name('designation');
Route::get('/designation_add',[DesignationController::class,'designation_add'])->name('designation_add');
Route::post('/designation/store',[DesignationController::class,'store'])->name('designation.store');


Route::get('/attendance',[AttendanceController::class,'attendance'])->name('attendance');
Route::get('/attendance_check',[AttendanceController::class,'attendance_check'])->name('attendance_check');
Route::post('/attendance/store',[AttendanceController::class,'store'])->name('attendance.store');
// Route::get('/checkin',[AttendanceController::class,'checkin'])->name('checkin');

Route::get('/notification',[NotificationController::class,'notification'])->name('notification');


Route::get('/leave',[LeaveController::class,'leave'])->name('leave');
Route::get('/apply_leave',[LeaveController::class,'apply_leave'])->name('apply_leave');
Route::post('/leave/store',[LeaveController::class,'store'])->name('leave.store');



Route::get('/leave_type',[Leave_typeController::class,'leave_type'])->name('leave_type');



Route::get('/movement',[MovementController::class,'movement'])->name('movement');
Route::get('/report',[ReportController::class,'report'])->name('report');


});

