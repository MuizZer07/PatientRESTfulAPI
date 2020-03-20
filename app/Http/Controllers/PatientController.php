<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

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
        $patient = Patient::create($request->all());

        return response()->json([
            'status' => 'true',
            'model' => 'patient',
            'data' => $patient,
            'message' => 'Patient Created!',
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
}
