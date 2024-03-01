<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    public function UserSubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $user = new Subscribe();

        $user->email = $request->email;
        $res = $user->save();

        if ($res) {
            return back();
        } else {
            return back();
        }
    }

}
