<?php

namespace App\Http\Controllers;

use App\Models\Apointment;
use App\Models\Doctors;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ApointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apointment = Apointment::with('doctor.user','patient')->get();
        return view('Doctor.DocotorApp',[
            'Apointment' => $apointment
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patient = User::where('role','patient')->get();
        $doctor = Doctors::with('user')->get();
       return view('Apointment.createApointment',[
        'Doctors' => $doctor,
        'Patients' => $patient
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $user_id = User::where('name',request('Doctor_name'))
                                    ->where('role', 'doctor')->first();
        // dd($user_id);
        $doctor_id = Doctors::where('user_id',$user_id->id)->first();
        $patient_id = User::where('name',request('Patient_name'))->first();
        // dd($patient_id);
        $appointment_date = Carbon::create(request('Years'), request('Months'), request('Days'),request('Hours'), 0, 0);
       Apointment::create([
        'doctor_id' => $doctor_id->id,
        'patient_id' => $patient_id->id,
        'appointment_date' => $appointment_date
       ]);

       return redirect('/user_page');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
       $a =  Auth::user();
       $u_id = $a->id;
      
       $d_id = Doctors::where('user_id',$u_id)->first();
       $app = Apointment::find($id);
     if(!is_null($app)){
      if($app->doctor_id === $d_id->id){
      
        return view ('apointment.editappointment',['a'=>$app]);
    }
      else{
            return "Not Your Appointment";
        }
    }
        else{
            return "Not Your Appointment";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apointment $apointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $a = Apointment::find($id);
        $a->update([
            'status' => request('status')
        ]);
        return redirect('Apointment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $a = Apointment::find($id);
        $a->delete();
        return redirect('Apointment');
    }
}
