<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateringController extends Controller
{
    public function dashboard(){
        return view('catering.dashboard.index');
    }
}
