<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Hash;

class EmployeeController extends Controller
{
    public function EmployeeRegister()
    {
        return view('EmployeeRegistration');
    }

    public function EmployeeLogin()
    {
        return view('EmployeeLogin');
    }

    public function EmpRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'role'=>'required',
            'section' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4|max:8|confirmed'
        ]);
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->role = $request->role;
        $employee->section = $request->section;
        $employee->email = $request->email;
        $employee->password = Hash::make($request->password);
        $res = $employee->save();

        if ($res) {
            return redirect('EmployeeLogin')->with('sucuss', "Registration Succussfully!!");
        } else {
            return back()->with('fail', "Registration Failed!!");
        }
    }

    public function EmpLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:8'
        ]);

        $patient = Employee::where('email', '=', $request->email)->first();

        if ($patient) {
            if (Hash::check($request->password, $patient->password)) {
                $request->session()->put('patientID', $patient->id);
                return redirect('EmployeeDashboard')->with('sucuss', "Login Sucussfully!!!");
            } else {
                return back()->with('fail', 'Password Mismatch!!');
            }
        } else {
            return back()->with('fail', 'Email mismatch!!');
        }
    }
}
