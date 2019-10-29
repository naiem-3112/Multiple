<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Student;
use App\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:student', 'checkPermission']);
    }

    public function index()
    {
        $roles = Role::all();
        return view('role.listRole', compact('roles'));
    }

    public function roleCreateForm()
    {

        $permissions = Permission::all();
        return view('role.createRole', compact('permissions'));
    }

    public function roleCreate(Request $request)
    {
        $this->validate($request, [
           'name' => 'required'
        ]);
       $roleCreate = Role::create($request->all());
       $roleCreate->permissions()->attach($request->id);

        return redirect('role/list');

        /*$roleCreate = new Role;
        $roleCreate->name = $request->name;
        $roleCreate->permission = $request->permission;
        $roleCreate->save();*/
    }

    public function roleEdit($id)
    {
        $editRoles = Role::find($id);
        return view('role.editRole', compact('editRoles'));
    }

    public function roleUpdate(Request $request, $id)
    {
        $this->validate($request, [
           'name' => 'required',
        ]);
        $roleUpdate = Role::find($id);
        $roleUpdate->name = $request->name;
        $roleUpdate->save();
        return redirect('role/list');
    }

    public function roleDelete($id)
    {
        $role = Role::find($id);
        $role->permissions()->detach();

        $role->delete();
        return redirect('role/list');
    }
}
