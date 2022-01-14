<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Redirect;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        $roles = Role::all();

        return view('admin.pages.role', [
            'permissions' => $permissions,
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role_name = $request->name;
        $permissions = $request->permission;
        
        $role = new Role();
        $role->name = $role_name;
        $role->save();
        $role->permissions()->attach($permissions);

        session()->put('message', 'Đã thêm vai trò');
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();
        return view('admin.pages.edit-role', [
            'role' => $role,
            'permissions' => $permissions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $roleName = $request->name;
        $permissions = $request->permission;
        $roleById = Role::find($id);
        
        if ($roleName !== $roleById->name) {
            $roleByName = Role::where('name', $roleName)->first();

            if ($roleByName) {
                session()->put('message', 'Vai trò đã tồn tại');
                return Redirect::back();
            }
            $roleById->update(['name' => $roleName]);
        }

        $roleById->permissions()->sync($permissions);
        session()->put('message', 'Đã cập nhật vai trò');
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::find($id)->delete();
        session()->put('message', 'Đã xóa vai trò');
        return Redirect::back();

    }
}
