<?php

namespace App\Http\Controllers;


use App\Student;
use App\Role;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('student.list', compact('students'));
    }

    public function createForm()
    {
        $roles = Role::all();
        return view('student.create', compact('roles'));
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'from' => 'required',
            'to' => 'required',

        ]);
        $request['password'] = bcrypt($request->password);
        $student = Student::create($request->all());
        $student->save();
        $student->roles()->attach($request->role);
        return redirect('student/list');
    }

    public function edit($id)
    {
        $editDetails = Student::find($id);
        return view('student.edit', compact('editDetails'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'from' => 'required',
            'to' => 'required',
        ]);
        $updateDetails = Student::find($id);
        $updateDetails->name = $request->name;
        $updateDetails->email = $request->email;
        $updateDetails->from = $request->from;
        $updateDetails->to = $request->to;
        $updateDetails->save();
        return redirect('student/list');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->roles()->detach();
        $student->delete();
        return redirect('student/list');
    }
}
