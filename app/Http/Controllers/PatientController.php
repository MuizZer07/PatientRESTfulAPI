<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        $permissions = Auth::user()->permissions();

        if($role == 1 || $permissions->contains('view_all_patients')){
            $patients =  Patient::all();

            return response()->json([
                'status' => 'true',
                'model' => 'patient',
                'data' => $patients,
                'message' => 'All Patient list!',
            ], 200);
        }
        else{
                return response()->json([
                    'status' => 'true',
                    'model' => 'patient',
                    'data' => [],
                    'message' => 'Access Denied! You dont have permission. Contact administrator.',
                ], 401);
        }
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

        if($role == 1){
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
                'data' => [],
                'message' => 'Access Denied!',
            ], 200);
        }
    }

    public function batch_store(Request $request)
    {
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
    }

    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->all());

        return response()->json([
        'status' => 'true',
        'model' => 'patient',
        'message' => 'Patient Updated!',
        'data' => $patient,
    ], 200);
    }

    public function batch_update(Request $request)
    {
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
    }

    public function delete(Patient $patient)
    {
        $patient->delete();

        return response()->json([
            'status' => 'true',
            'model' => 'patient',
            'message' => 'Patient Deleted!',
            'data' => '',
        ], 204);
    }

    public function batch_delete(Request $request)
    {
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
    }

}
