<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovementController extends Controller
{
    public function Movement(){
        return view('pages.movement');
    }
}
