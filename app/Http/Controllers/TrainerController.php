<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainers;
use App\Models\User;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('trainers');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {   
        $request -> validate([
            'timings'=> 'required',
            'experience' => 'required', 
            'phone' => 'required'
        ]);

        $user = $request->user();
        $trainers = new trainers;
        $trainers->timings = $request->timings;
        $trainers->experience = $request->experience;
        $trainers->phone = $request->phone;
        $user->trainers()->save($trainers);
        return redirect(route('trainersdashboard'))->with('status', 'Trainer Added Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {   
        $trainers = trainers::find($id);
        return view('edittrainers', ['trainers' => $trainers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $trainers = trainers::find($id);
        $trainers->timings = $request->timings;
        $trainers->phone = $request->phone;
        $trainers->experience = $request->experience;
        $trainers->save();
        return redirect(route('trainersdashboard'))->with('status', 'Trainer Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        trainers::destroy($id);
        return redirect(route('trainersdashboard'))->with('status', 'Trainer Deleted Successfully.');
    }
}
