<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function users(){
        return view('users');
    }

    public function Laboratories(){
        return view('laboratories');
    }
}
