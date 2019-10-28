<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:student');
    }

    public function loginForm(){
        return view('student.loginForm');
    }
    public function login(Request $request){

        $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended(route('student.list'));
        }
        return redirect('/student/login');

    }
}
