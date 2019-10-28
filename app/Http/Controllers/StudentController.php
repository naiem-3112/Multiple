<?php

namespace App\Http\Controllers;


use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','check']);
    }

    public function index()
    {
        $students = Student::all();
        return view('student.list', compact('students'));
    }

    public function createForm()
    {
        return view('student.create');
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'from' => 'required',
            'to' => 'required'

        ]);
        $request['password'] = bcrypt($request->password);
        $student = Student::create($request->all());
        $student->save();
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
        Student::find($id)->delete();
        return redirect('student/list');
    }
}
