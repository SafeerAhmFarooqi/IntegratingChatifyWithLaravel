<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    
    public function sendActivationEmail($userEmail)
    {
        Mail::to($userEmail)->send(new UserAccountActivation());
        return back()->with('message', 'Account Activation Email Has Been Sent to '.$userEmail );
    }

}
