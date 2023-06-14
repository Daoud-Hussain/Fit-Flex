<?php

namespace App\Http\Controllers;
use App\Models\Trainers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainerDashboardController extends Controller
{
    public function show_trainers(){
        $trainers = Trainers::all();
        return view('trainersdashboard', ['trainers'=>$trainers]);
    }
}
