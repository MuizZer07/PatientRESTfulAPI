<?php

namespace App\Http\Controllers;

use App\Http\UserPermissions;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if($role == 1){
            $users =  User::all();

            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'data' => $users,
                'message' => 'All User list!',
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }

    public function report(Request $request)
    {
        $role = Auth::user()->role;

        if($role == 1){
            $start = $request->get('start');
            $length = $request->get('length');
            $condition = $request->get('condition');
            $order_by = $request->get('order_by');
            $draw = $request->get('draw');

            $users = User::all()->skip($start)->take($length);

            if(!empty($condition)){
                $condition_json = json_decode($condition);
                foreach($condition_json as $key=>$value) {
                    $users = $users->where($key, '=', $value);
                }
            }

            if(!empty($order_by)){
                $order_by_json = json_decode($order_by);
                foreach($order_by_json as $key=>$value) {
                    if($value == 'Asc'){
                        $users = $users->sortBy($key);
                    }else if($value == 'Desc'){
                        $users = $users->sortByDesc($key);
                    }
                }
            }

            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'data' => $users,
                'draw' => empty($draw) ? 1 : intval($draw),
                'message' => 'User Report!',
                'totalRecords' => count($users)
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }

    public function show(User $user)
    {
        $role = Auth::user()->role;

        if($role == 1){
            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'data' => $user,
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }

    public function store(Request $request)
    {
        $role = Auth::user()->role;

        if($role == 1){
            $user = User::create($request->all());

            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'data' => $user,
                'message' => 'User Created!',
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }

    public function update(Request $request, User $user)
    {
        $role = Auth::user()->role;

        if($role == 1){
            $user->update($request->all());

            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'message' => 'User Updated!',
                'data' => $user,
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'message' => 'Access Denied! You dont have administrator Permission.',
            ], 401);
        }

    }

    public function delete(User $user)
    {
        $role = Auth::user()->role;

        if($role == 1){
            $user->delete();

            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'message' => 'User Deleted!',
                'data' => '',
            ], 204);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'user',
                'message' => 'Access Denied! You dont have administrator permission.',
            ], 401);
        }
    }
}
