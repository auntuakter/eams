<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){
        // return view('pages.profile');

    $profile = Employee::where('id', Auth::user()->id)->first();
    return view('pages.profile', compact('profile'));

    }

}
