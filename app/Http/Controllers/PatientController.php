<?php

namespace App\Http\Controllers;

use App\Http\UserPermissions;
use App\User;
use Illuminate\Http\Request;
use App\Patient;
use Illuminate\Support\Facades\Auth;
use App\Http\Constants;

class PatientController extends Controller
{
    public function index()
    {
        $patients =  Patient::all();

        return response()->json([
            'status' => 'true',
            'model' => 'patient',
            'data' => $patients,
            'message' => 'All Patient list!',
        ], 200);
    }

    public function show(Patient $patient)
    {
        return response()->json([
            'status' => 'true',
            'model' => 'patient',
            'data' => $patient,
        ], 200);
    }

    public function store(Request $request)
    {
        $role = Auth::user()->role;
        $permissions = Auth::user()->permissions();

        $user_permissions = new UserPermissions;

        if($role == 1 || $permissions->contains($user_permissions->add_single_patient)){
            $patient = Patient::create($request->all());

            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'data' => $patient,
                'message' => 'Patient Created!',
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => 'Access Denied! You dont have permission to a patient. Contact administrator.',
            ], 401);
        }
    }

    public function batch_store(Request $request)
    {
        $role = Auth::user()->role;
        $permissions = Auth::user()->permissions();
        $user_permissions = new UserPermissions;

        if($role == 1 || $permissions->contains($user_permissions->add_multiple_patients)){
            $count = 0;
            $failed = 0;
            foreach ($request->patients as $patient){
                $new_patient = new Patient;
                $patient_json = json_decode($patient);
                foreach($patient_json as $key=>$value) {
                    $new_patient[$key] = $value;
                }
                try{
                    $new_patient->save();
                    $count += 1;
                }catch (\Exception $ex){
                    $failed += 1;
                }
            }

            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => $count.' New Patient Created, '.$failed.' failed.',
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => 'Access Denied! You dont have permission to add multiple patients. Contact administrator.',
            ], 401);
        }

    }

    public function update(Request $request, Patient $patient)
    {
        $role = Auth::user()->role;
        $permissions = Auth::user()->permissions();
        $user_permissions = new UserPermissions;

        if($role == 1 || $permissions->contains($user_permissions->edit_single_patient)){
            $patient->update($request->all());

            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => 'Patient Updated!',
                'data' => $patient,
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => 'Access Denied! You dont have permission to edit/update a patient information. Contact administrator.',
            ], 401);
        }

    }

    public function batch_update(Request $request)
    {
        $role = Auth::user()->role;
        $permissions = Auth::user()->permissions();
        $user_permissions = new UserPermissions;

        if($role == 1 || $permissions->contains($user_permissions->edit_multiple_patient)){
            $count = 0;
            $failed = 0;
            foreach ($request->patients as $patient){
                $patient_json = json_decode($patient);
                $_patient = Patient::where('id', $patient_json->id)->get()->first();
                foreach($patient_json as $key=>$value) {
                    $_patient[$key] = $value;
                }
                try{
                    $_patient->save();
                    $count += 1;
                }catch (\Exception $ex){
                    $failed += 1;
                }
            }

            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => $count.' Patients Updated, '.$failed.' failed.',
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => 'Access Denied! You dont have permission to edit/update multiple patient information. Contact administrator.',
            ], 401);
        }
    }

    public function delete(Patient $patient)
    {
        $role = Auth::user()->role;
        $permissions = Auth::user()->permissions();
        $user_permissions = new UserPermissions;

        if($role == 1 || $permissions->contains($user_permissions->delete_single_patient)){
            $patient->delete();

            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => 'Patient Deleted!',
                'data' => '',
            ], 204);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => 'Access Denied! You dont have permission to remove any patient. Contact administrator.',
            ], 401);
        }
    }

    public function batch_delete(Request $request)
    {
        $role = Auth::user()->role;
        $permissions = Auth::user()->permissions();
        $user_permissions = new UserPermissions;

        if($role == 1 || $permissions->contains($user_permissions->delete_multiple_patient)){
            $count = 0;
            $failed = 0;
            foreach ($request->patient_ids as $patient){
                $_patient = Patient::where('id', $patient)->get()->first();

                try{
                    $_patient->delete();
                    $count += 1;
                }catch (\Exception $ex){
                    $failed += 1;
                }
            }

            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => $count.' Patients Deleted, '.$failed.' failed.',
            ], 200);
        }else{
            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'message' => 'Access Denied! You dont have permission to delete any patient. Contact administrator.',
            ], 401);
        }
    }

}
