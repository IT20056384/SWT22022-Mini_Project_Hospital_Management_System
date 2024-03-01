<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Contact;

class ContactController extends Controller
{
    public function UserContact(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $con = new Contact();

        $con->name = $request->name;
        $con->email = $request->email;
        $con->subject =  $request->subject;
        $con->message = $request->message;
        $res = $con->save();

        if ($res) {
            return back()->with('sucuss', "Thank You For Your Response!!!");
        } else {
            return back()->with('fail', "Failed the Response");
        }
    }
    }
