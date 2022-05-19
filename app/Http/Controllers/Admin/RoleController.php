<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:Listar Rol')->only('index');
        $this->middleware('can:Crear Rol')->only('create','store');
        $this->middleware('can:Editar Rol')->only('edit','update');
        $this->middleware('can:Eliminar Rol')->only('destroy');
    }

    public function index()
    {

        $roles=Role::all();
        return view('admin.roles.index',compact('roles'));
    }


    public function create()
    {
        $permissions=Permission::all();
        //return $permissions;
        return view('admin.roles.create',compact('permissions'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:roles',
            'permissions'=>'required'
        ]);

        $role=Role::create([
            'name'=> $request->name
        ]);

        $role->permissions()->attach($request->permissions);
        return redirect()->route('admin.roles.index')->with('info','El rol se creo satisfactoriamente');
    }


    public function show(Role $role)
    {
        return view('admin.roles.show',compact('role'));
    }

    public function edit(Role $role)
    {

        $permissions=Permission::all();
        return view('admin.roles.edit',compact('role','permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name'=>'required',
            'permissions'=>'required'
        ]);

        $role->update([
            'name'=>$request->name

        ]);

        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.index')->with('info','El rol se edito satisfactoriamente');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('info','El Rol se elimino con exito');
    }
}
