<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Doctor;
use  App\Models\Booking;
use Hash;
use Session;

class DoctorController extends Controller
{
    //
    public function DoctorReg(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'special' => 'required',
            'email' => 'required|email|unique:doctors',
            'password' => 'required|min:4|max:8|confirmed'
        ]);

        $doctor = new Doctor();

        $doctor->name = $request->name;
        $doctor->special = $request->special;
        $doctor->email =  $request->email;
        $doctor->password = Hash::make($request->password);
        $res = $doctor->save();

        if ($res) {
            return redirect('DoctorLogin')->with('sucuss', "Registration Succussfully!!");
        } else {
            return back()->with('fail', "Registration Failed!!");
        }
    }

    public function DoctorLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:8'
        ]);

        $doctor=Doctor::where('email','=',$request->email)->first();

        if($doctor){
            if(Hash::check($request->password,$doctor->password)){
                $request->session()->put('DoctorID',$doctor->id);
                return redirect('DoctorDashboard')->with('sucuss',"Login Sucussfully!!!");
            }
            else{
                return back()->with('fail','Password Mismatch!!');
            }
        }
        else{
            return back()->with('fail','Email mismatch!!');
        }


    }



}
