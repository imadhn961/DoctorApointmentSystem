<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;
use App\Models\User;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctors $doctors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctors = Doctors::find($id);
       return view('Doctor.EditDoctor' , ['Doctor'=>$doctors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $doctors = Doctors::find($id);
        // $userid = $doctors->user_id;
        // // dd($userid);
        // $user = User::find($userid);
        // $user->update([
        //             'email' => request('email'),
        //             'password' => request('password'),
        //             'Phone_number' => request('phone_number'),
        //             'role' => 'doctor',
        //     ]);
        $doctors->user->update([
            'email' => request('email'),
            'password' => request('password'),
            'Phone_number' => request('phone_number'),
            'role' => 'doctor',
        ]);
        $doctors->update([
            'location' => request('location')
        ]);
        return redirect('/Doctor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctors = Doctors::find($id);
        $doctors->delete();
        // dd($doctors);
        return redirect('/Doctor');
    }
}
