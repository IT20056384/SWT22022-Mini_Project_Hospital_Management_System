<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function PatientRegister(){
        return view('PatientRegistration');
    }

    public function DoctorRegister(){
        return view('DoctorRegistration');
    }

    public function DoctorLogin(){
        return view('DoctorLogin');
    }

    public function PatientLogin(){
        return view('PatientLogin');
    }

    public function PatientDashboard(){
        return view('PatientDashboard');
    }

    public function DoctorDashboard(){
            $bookings = Booking::all();
            return view('DoctorDashboard', ['bookings'=>$bookings]);

    }

    public function EmployeeDashboard(){
        $bookings = Booking::all();
        return view('EmployeeDashboard', ['bookings'=>$bookings]);

}

    public function Booking(){
        return view('Booking');
    }

    public function edit(){
        return view('edit');
    }

   public function Home () {
        return view('Home');
    }

}
