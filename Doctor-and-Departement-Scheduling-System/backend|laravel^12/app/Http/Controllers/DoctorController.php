<?php

namespace App\Http\Controllers;

use App\Http\Requests\Doctor\CreateDoctorRequest;
use App\Http\Requests\Doctor\UpdateDoctorRequest;
use App\Models\Departement;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function index(Request $request) {
        $validator = Validator::make($request->query(), [
            'page' => 'nullable|min:0|integer',
            'size' => 'nullable|min:1|integer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'invalid field',
                'errors' => $validator->errors()
            ], 400);
        }

        $page = $request->query('page', 0);
        $size = $request->query('size', 10);
        
        $doctors = Doctor::offset($page * $size)->limit($size)->get();

        return response()->json([
            'page' => $page,
            'size' => $size,
            'doctors' => $doctors
        ], 200);
    }

    public function store(CreateDoctorRequest $request) {
        $validated = $request->validated();

        Doctor::create([
            'doctor_id' => $validated['doctorID'],
            'name' => $validated['name'],
            'gender' => $validated['gender'],
            'phone_number' => $validated['phone'],
            'address' => $validated['address'],
            'email' => $validated['email'],
            'bio' => $validated['bio'] ?? "",
        ]);

        return response()->json([
            'message' => 'doctor created'
        ], 201);
    }

    public function update(UpdateDoctorRequest $request, $id) {
        $validated = $request->validated();

        $doctor = Doctor::where('doctor_id', $id)->first();

        if (!$doctor) {
            return response()->json([
                'message' => 'doctor not found'
            ], 404);
        }

        $doctor->update([
            'name' => $validated['name'],
            'gender' => $validated['gender'],
            'phone_number' => $validated['phone'],
            'address' => $validated['address'],
            'email' => $validated['email'],
            'bio' => $validated['bio'] ?: null
        ]);

        return response()->json([
            'message'=> 'doctor updated'
        ], 200);
    }

    public function destroy($id) {
        $doctor = Doctor::where('doctor_id', $id)->first();

        if (!$doctor) {
            return response()->json([
                'message' => 'Doctor not found'
            ], 404);
        }

        $schedule = Schedule::where('doctor_id', $id)->first();

        if ($schedule) {
            return response()->json([
                'message' => 'Doctor cannot delete'
            ], 422);
        }

        $doctor->delete();

        return response()->json([
            'message' => 'Doctor deleted'
        ], 200);
    }
}
