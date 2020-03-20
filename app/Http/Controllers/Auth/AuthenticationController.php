<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if($validator->fails()){
            return response()->json([
                    'status' => 'false',
                    'model' => 'user',
                    'message' => $validator->errors()->first(),
                    'field' => $validator->errors()->keys()[0]
            ], 400);
        }

        try{
            $user = User::create($request->all());
            Auth::guard()->login($user);

            return $this->registered($request, $user);
        }catch (\Exception $ex){
            return response()->json([
                'status' => 'false',
                'model' => 'user',
                'message' => $ex->getMessage()
            ], 500);
        }
    }

    protected function registered(Request $request, User $user)
    {
        $user->refreshToken();

        return response()->json(['data' => $user->toArray()], 201);
    }

    public function validator(array $data){
        $rule = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6'
        ];

        $validator = Validator::make($data, $rule);
        $validator->errors()->add('field', 'Something is wrong with this field!');

        return $validator;
    }

    public function validateLogin(array $data){
        $rule = [
            'email' => 'required',
            'password' => 'required'
        ];

        $validator = Validator::make($data, $rule);
        $validator->errors()->add('field', 'Something is wrong with this field!');

        return $validator;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $validator = $this->validateLogin($credentials);

        if($validator->fails()){
            return response()->json([
                'status' => 'false',
                'model' => 'user',
                'message' => $validator->errors()->first(),
                'field' => $validator->errors()->keys()[0]
            ]);
        }

        try{
            $user = User::where('email', $request->email)->get()->first();
            Auth::guard()->login($user);
            $user->refreshToken();

            return response()->json([
                    'status' => 'true',
                    'model' => 'user',
                    'data' => $user->toArray(),
                    'message' => 'Successfully Logged in'
                ], 200);
            }catch (\Exception $ex){
            return response()->json([
                'status' => 'false',
                'model' => 'user',
                'message' => $ex->getLine(),
            ], 500);
        }
    }

    public function logout(Request $request){
        try{
            $user = Auth::guard('api')->user();

            if($user){
                $user->api_token = null;
                $user->save();

                return response()->json([
                    'status' => 'true',
                    'model' => 'user',
                    'message' => 'Successfully Logged Out'
                ], 200);
            }else{
                return response()->json([
                    'status' => 'false',
                    'model' => 'user',
                    'message' => 'Not Logged in',
                ], 400);
            }

        }catch (\Exception $ex){
            return response()->json([
                'status' => 'false',
                'model' => 'user',
                'message' => $ex->getLine(),
            ], 500);
        }
    }

    public function getUser(Request $request){
        $user = Auth::guard('api')->user();

        return response()->json([
            'status' => 'true',
            'model' => 'user',
            'data' => $user,
        ], 200);
    }
}
