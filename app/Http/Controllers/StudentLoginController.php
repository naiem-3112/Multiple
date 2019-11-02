<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:student'])->except(['login']);
    }


    public function login(Request $request){

        $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect('student/info');
        }
        return redirect('/')->with('error', 'Credential do not match');

    }
        public function info()
        {
            return view('student.info');
        }

        public function logout(Request $request)
        {
            Auth::guard('student')->logout();

            return redirect('/');
        }

}
