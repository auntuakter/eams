<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function Notice(){
        return view('pages.notice');
    }

}
