<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\Leave_typeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SallaryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PDFController;


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

Route::get('/user', function () {
    return view('master');
})->name('user.view');

Route::get('/', function () {
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
Route::get('/employeee/edit{employee_id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::put('/employeee/update{employee_id}',[EmployeeController::class,'update'])->name('employee.update');



Route::get('/department',[DepartmentController::class,'department'])->name('department');
Route::get('/department_add',[DepartmentController::class,'department_add'])->name('department_add');
Route::post('/department/store',[DepartmentController::class,'store'])->name('department.store');
Route::get('/department/delete{department_id}',[DepartmentController::class,'delete'])->name('department.delete');
Route::get('/department/edit{department_id}',[DepartmentController::class,'edit'])->name('department.edit');
Route::put('/department/update{department_id}',[DepartmentController::class,'update'])->name('department.update');


Route::get('/designation',[DesignationController::class,'designation'])->name('designation');
Route::get('/designation_add',[DesignationController::class,'designation_add'])->name('designation_add');
Route::post('/designation/store',[DesignationController::class,'store'])->name('designation.store');
Route::get('/designation/delete{designation_id}',[DesignationController::class,'delete'])->name('designation.delete');
Route::get('/designation/edit{designation_id}',[DesignationController::class,'edit'])->name('designation.edit');
Route::put('/designation/update{designation_id}',[DesignationController::class,'update'])->name('designation.update');

Route::get('/attendance',[AttendanceController::class,'attendance'])->name('attendance');
Route::get('/attendance_check',[AttendanceController::class,'attendance_check'])->name('attendance_check');
Route::get('/attendance_view',[AttendanceController::class,'attendance_view'])->name('attendance_view');
Route::get('/attendance_report',[AttendanceController::class,'attendance_report'])->name('attendance_report');
Route::post('/attendance/store',[AttendanceController::class,'store'])->name('attendance.store');
Route::get('/checkin',[AttendanceController::class,'checkin'])->name('checkin');
Route::get('/checkout',[AttendanceController::class,'checkout'])->name('checkout');




Route::get('/notice',[NoticeController::class,'notice'])->name('notice');
Route::get('/notice_add',[NoticeController::class,'notice_add'])->name('notice_add');
Route::post('/notice/store',[NoticeController::class,'store'])->name('notice.store');


Route::get('/leave',[LeaveController::class,'leave'])->name('leave');
Route::get('/apply_leave',[LeaveController::class,'apply_leave'])->name('apply_leave');
Route::post('/leave/store',[LeaveController::class,'store'])->name('leave.store');
Route::post('leave/update/status/{leave_id}',[LeaveController::class,'UpdateStatus'])->name('update.status');
Route::get('leave/cancel/{leave_id}',[LeaveController::class,'leaveCancel'])->name('admin.leave.cancel');

Route::get('/leave_type',[Leave_typeController::class,'leave_type'])->name('leave_type');
Route::get('/leave_type_add',[Leave_typeController::class,'leave_type_add'])->name('leave_type_add');
Route::post('/leave_type/store',[Leave_typeController::class,'store'])->name('leave_type.store');




Route::get('/movement',[MovementController::class,'movement'])->name('movement');
Route::get('/movement_add',[MovementController::class,'movement_add'])->name('movement_add');
Route::post('/movement/store',[MovementController::class,'store'])->name('movement.store');
Route::get('/movement/delete{student_id}',[MovementController::class,'delete'])->name('student.delete');
Route::get('/movement/edit{student_id}',[MovementController::class,'edit'])->name('student.edit');
Route::put('/movement/update{student_id}',[MovementController::class,'update'])->name('student.update');


Route::get('/report',[ReportController::class,'report'])->name('report');


Route::get('/sallary',[SallaryController::class,'sallary'])->name('sallary');
 Route::get('/sallary_add',[SallaryController::class,'sallary_add'])->name('sallary_add');
Route::post('/sallary/store',[SallaryController::class,'store'])->name('sallary.store');



Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
Route::get('/profile/edit{profile_id}',[ProfileController::class,'edit'])->name('profile.edit');
Route::put('/profile/update/{profile_id}',[ProfileController::class,'update'])->name('profile.update');


Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/notification_seen',[LeaveController::class,'notification'])->name('notification_seen');



Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);


});

