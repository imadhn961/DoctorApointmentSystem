<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Doctors;
use App\Models\Apointment;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function createD(){
        request()->validate(
            [
                'name' => ['required'] , 
                'password' => ['required']
    
            ]
            );

            // dd(request('Days', []));
            $a = [];
           
            foreach(request('Days', []) as $day){
                $a += [$day => [request('Start'), request('End')]];
            } // this create the json form to send to database

                //    dd(vars: json_encode($a));
    
   
    
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'Phone_number' => request('phone_number'),
            'role' => 'doctor',
    
        ]);// this create the user

        

        // $a = ['Monday' => ['09:00', '12:00'], 'Tuesday' => ['09:00', '12:00'], 'Wednesday' => ['09:00', '12:00'], 'Thursday' => ['09:00', '12:00'],
        //              'Friday' => ['09:00', '12:00'], 'Saturday' => ['09:00', '12:00']];
    
       Doctors::create([
            'specialization' => request('specialization'),
            'location' => request('location'),
            'available_times' =>$a ,
            'user_id' => $user->id
        ]);// this create the doctor and doctor is related to user by user_id
    
         return redirect('/create'); //redirect to the create page
    }


    public function createP(){
        request()->validate(
        [
            'name' => ['required'] , 
            'password' => ['required']
        ]
        );

        $user = User::create([

            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'Phone_number' => request('phone_number'),
            'role' => 'patient',

        ]);

        return redirect('/create');
    }


public function login(){
    $Attribute = request()->validate([
                'email'=>['required'],
    // 'password'=>request('required'), => this is false
    ]);
    $user = User::where('email' , request('email'))->first();
    if(!is_null($user)){
            if($user->role === 'admin' ){
                $log = Auth::attempt([
                    
                        'email' => request('email'),
                        'password' => request('password'),
                ]);

                        request() -> session() -> regenerate();

                        return redirect('/user_page');
                }
                elseif($user->role === 'doctor'){
                    $log = Auth::attempt([
                        'email' => request('email'),
                        'password' => request('password'),
                    ]);
                    request() -> session() -> regenerate();
                    return redirect('Apointment');
                }

            // else{
            //         return redirect('/');
            //     }
        }
    else
        { 
                return redirect('/');
        }
    
    }
public function createpage(){
    return view('Admin.create');
}

public function Doctors(){
    return view('Admin.Doctors' ,['D'=>Doctors::with('user')->get()]);
}

public function Patients(){
    return view('Admin.Patients' ,
    ['P'=>User::where('role','patient')->get()]);
}

public function logout(){
    Auth::logout();
    return redirect('/');
}

public function showD( $id){
    $Doctor =  Doctors::find($id);

    // if(is_string($Doctor->available_times)){
    //  $a = json_decode($Doctor->available_times , true);
     
    // }
    // else{
    //     $a = 'null';
    // }


    
    return view('Admin.DoctorShow' , ['d'=>$Doctor, 'appointment'=>$Doctor->available_times]);
}

public function showP( $id){
   $user = User::find($id);
    return view('Admin.PatientShow' , ['p'=>$user]);
}

public function editp($id){
    $user = User::find($id);
    return view('Admin.EditPatient' , ['p'=>$user]);
}

public function updatep($id){
    $user = User::find($id);
    $user ->  update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'Phone_number' => request('phone_number'),
    ]);

    return redirect('/Patient');
}
public function destroypatient($id){
    $delete = User::find($id);
    $delete->delete();
    return redirect('/Patient');}

public function getallApointment(){
    $a = Apointment::all();
    return view('Admin.userA' , ['A'=>$a]);
}
public function getallDoctor(){
    $d = Doctors::with('user')->get();
    return view('Admin.userd' , [
        'D'=>$d,

]);}

public function getallPatient(){
    $p = User::where('role','patient')->get();
    return view('Admin.userP' , ['P'=>$p]);}
}
