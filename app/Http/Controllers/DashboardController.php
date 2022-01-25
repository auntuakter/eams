<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $department=Department::all()->count();
        $designation=Designation::all()->count();

        $employee=Employee::all()->count();
        //dd($employee);
       // $leave=Leave::all()->count();

        return view('pages.dashboard',compact('employee','department','designation'));
    }
}
