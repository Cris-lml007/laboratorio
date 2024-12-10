<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;

class DashboardController extends Controller
{
    public function users(){
        return view('administration.users');
    }

    public function laboratories(){
        return view('administration.laboratories');
    }

    public function laboratory(){
        $laboratories = Laboratory::all();
        return view('laboratories',compact(['laboratories']));
    }

    public function actives(){
        return view('administration.actives');
    }

    public function assetLaboratory(Laboratory $laboratory){
        return view('laboratory',compact(['laboratory']));
    }

    public function maintenance(){
        return view('maintenance');
    }
}
