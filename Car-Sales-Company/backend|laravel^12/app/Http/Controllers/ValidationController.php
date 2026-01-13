<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validation\ValidationStoreRequest;
use App\Http\Resources\Validation\ValidationIndexResource;
use App\Models\Validation;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function index() {
        $validation = Validation::get();
        $validation->load('validator');

        return ValidationIndexResource::collection($validation);
    }

    public function store(ValidationStoreRequest $request) {
        $user = $request->user();
        $checkAlready = Validation::where('society_id', $user->id)->first();

        if ($checkAlready) {
            return response()->json([
                'message' => 'You done request data validation'
            ], 409);
        }

        $validated = $request->validated();

        Validation::create([
            'society_id' => $user->id,
            'validator_id' => $validated['validator_id'],
            'job' => $validated['job'],
            'job_description' => $validated['job_description'],
            'income' => $validated['income'],
            'reason_accepted' => $validated['reason_accepted'],
        ]);

        return response()->json([
            'message' => 'Request data validation sent successful'
        ], 200);
    }
}
