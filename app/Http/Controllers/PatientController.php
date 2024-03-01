<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Booking;
use Session;
use Hash;

class PatientController extends Controller
{
    public function PatientReg(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4|max:8|confirmed'
        ]);
        $patient = new Patient();

        $patient->name = $request->name;
        $patient->gender = $request->gender;
        $patient->dob = $request->dob;
        $patient->address = $request->address;
        $patient->email = $request->email;
        $patient->password = Hash::make($request->password);
        $res = $patient->save();

        if ($res) {
            return redirect('PatientLogin')->with('sucuss', "Registration Succussfully!!");
        } else {
            return back()->with('fail', "Registration Failed!!");
        }
    }

    public function PatientLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:8'
        ]);

        $patient = Patient::where('email', '=', $request->email)->first();

        if ($patient) {
            if (Hash::check($request->password, $patient->password)) {
                $request->session()->put('patientID', $patient->id);
                return redirect('Booking')->with('sucuss', "Login Sucussfully!!!");
            } else {
                return back()->with('fail', 'Password Mismatch!!');
            }
        } else {
            return back()->with('fail', 'Email mismatch!!');
        }
    }




    public function PatientBooking(Request $request)
    {
        $uid = $request->session()->get('patientID');

        $request->validate([
            'patientName' => 'required',
            'patientAge' => 'required',
            'category' => 'required',
            'doctorname' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        $booking = new Booking();
        $booking->UserID = $uid;
        $booking->patientName = $request->patientName;
        $booking->patientAge = $request->patientAge;
        $booking->category = $request->category;
        $booking->doctorname = $request->doctorname;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $res = $booking->save();

        if ($res) {
            return back()->with('sucuss', 'Booking Succussfully');
        } else {
            return back()->with('fail', 'Booking Failed!!!');
        }
    }


    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('edit', compact('booking'));
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->patientName = $request->input('patientName');
        $booking->patientAge = $request->input('patientAge');
        $booking->category = $request->input('category');
        $booking->doctorname = $request->input('doctorname');
        $booking->date = $request->input('date');
        $booking->time = $request->input('time');
        $booking->update();
        return redirect('EmployeeDashboard')->with('status', 'Booking Updated Successfully');
    }


    public function destroy($id)
    {
        $bookings = Booking::find($id);
        $bookings->delete();
        return redirect()->back()->with('status','Booking Deleted Successfully');
    }




//booking

public function PatientBookings(){
    return view('PatientBooking');
}


public function UserBooking(){
    $bookings = Booking::all();
    return view('PatientBooking', ['bookings'=>$bookings]);

}
public function Booking(){
    return view('Booking');
}

// public function edit(){
//     return view('edit');
// }









}
