<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use App\Models\Maintenance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        $maintenances = Maintenance::whereHas('laboratory',function($query){
            $query->where('teacher_id',Auth::user()->teacher->id);
        })->where('date',Carbon::now()->toDateString())->where('active',1)->paginate(10);
        return view('maintenance',compact(['maintenances']));
    }
}
