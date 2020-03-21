<?php

namespace App\Http\Controllers;

use App\PermissionRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionRoleController extends Controller
{
    public function store(Request $request)
    {
        $role = Auth::user()->role;

        if($role == 1){
            $permission_role = PermissionRole::create($request->all());

            return response()->json([
                'status' => 'true',
                'model' => 'permission_role',
                'data' => $permission_role,
                'message' => 'Permission added for user!',
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'permission_role',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }

    public function delete(PermissionRole $permission_role)
    {
        $role = Auth::user()->role;
        if($role == 1){
            $permission_role->delete();

            return response()->json([
                'status' => 'true',
                'model' => 'permission_role',
                'message' => 'Permission Removed for user!',
                'data' => '',
            ], 204);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'permission_role',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }

}
