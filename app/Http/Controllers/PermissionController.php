<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if($role == 1){
            $permissions =  Permission::all();

            return response()->json([
                'status' => 'true',
                'model' => 'permission',
                'data' => $permissions,
                'message' => 'All Permission list!',
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'permission',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }

    public function show(Permission $permission)
    {
        $role = Auth::user()->role;

        if($role == 1){
            return response()->json([
                'status' => 'true',
                'model' => 'permission',
                'data' => $permission,
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'permission',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }

    public function store(Request $request)
    {
        $role = Auth::user()->role;

        if($role == 1){
            $permission = Permission::create($request->all());

            return response()->json([
                'status' => 'true',
                'model' => 'permission',
                'data' => $permission,
                'message' => 'Permission Created!',
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'permission',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }

    public function update(Request $request, Permission $permission)
    {
        $role = Auth::user()->role;

        if($role == 1){
            $permission->update($request->all());

            return response()->json([
                'status' => 'true',
                'model' => 'permission',
                'message' => 'Permission Updated!',
                'data' => $permission,
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'permission',
                'message' => 'Access Denied! You dont have administrator Permission.',
            ], 401);
        }

    }

    public function delete(Permission $permission)
    {
        $role = Auth::user()->role;

        if($role == 1){
            $permission->delete();

            return response()->json([
                'status' => 'true',
                'model' => 'permission',
                'message' => 'Permission Deleted!',
                'data' => '',
            ], 204);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'permission',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }
}
