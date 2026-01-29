<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validation\ValidationStoreRequest;
use App\Http\Resources\Validation\ValidationIndexResource;
use App\Models\Validation;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function store(ValidationStoreRequest $request) {
        $validated = $request->validated();
        $user = $request->user();

        $checkAlready = Validation::where('society_id', $user->id)->first();

        if ($checkAlready) {
            return response()->json([
                'message' => 'You done sent validation data'
            ], 409);
        }

        Validation::create([
            'society_id' => $user->id,
            'validator_id' => $request->validator_id,
            'job' => $validated['job'],
            'job_description' => $validated['job_description'],
            'income' => $validated['income'],
            'reason_accepted' => $validated['reason_accepted'],
            'validator_notes' => $request->validator_notes ?? null
        ]);

        return response()->json([
            'message' => 'Request data validation sent successful'
        ]);
    }

    public function index(Request $request) {
        $user = $request->user();

        $validation = Validation::where('society_id', $user->id)->first();

        if (!$validation) {
            return response()->json([
                'message' => 'validation not found'
            ]);
        }

        $validation->load('validator');

        return response()->json([
            'validation' => new ValidationIndexResource($validation) 
        ]);
    }
}
