<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Request $request, $email = null)
    {
       
        $emailToShow = $email ?? auth()->user()->email;
    
        $user = User::where('email', $emailToShow)->first();
    
       
        return view('profile2', ['user' => $user]);
    }
    
}


