<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Student;

class TeamController extends Controller
{
    public function index(){
        return view('team.listTeam');

    }
    public function teamCreateForm(){
        $members = Student::all();
        return view('team.createTeam', compact('members'));
    }
    public function create(Request $request){
        $this->validate($request, [
           'name' => 'required',
           'leader_id' => 'nullable'
        ]);

        $team = Team::create($request->all());
        $team->save();
    }
    public function edit($id){

    }
    public function update(Request $request, $di){

    }
    public function delete($id){

    }
}
