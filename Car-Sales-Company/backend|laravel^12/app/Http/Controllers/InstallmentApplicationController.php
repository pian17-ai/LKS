<?php

namespace App\Http\Controllers;

use App\Http\Requests\Installment\InstallmentApplicationRequest;
use App\Http\Resources\InstalmentApplication\InstalmentApplicationResource;
use App\Models\InstallmentApplication;
use App\Models\Validation;
use Illuminate\Http\Request;

class InstallmentApplicationController extends Controller
{
    public function index() {
        $instalments = InstallmentApplication::get();
        $instalments->load('car');

        return response()->json([
            'instalments' => InstalmentApplicationResource::collection($instalments)
        ], 200);
    }
    
    public function store(InstallmentApplicationRequest $request) {
        $validated = $request->validated();
        $user = $request->user();
        
        $validation = Validation::where('society_id', $user->id)->first();

        if ($validation->status !== 'accepted') {
            return response()->json([
                'message' => 'Your data validator must be accepted by validator before'
            ], 401);
        }

        $checkAlready = InstallmentApplication::where('society_id', $user->id)->first();

        if ($checkAlready) {
            return response()->json([
                'message' => 'Application for a instalment can only be once'
            ], 401);
        }

        InstallmentApplication::create([
            'society_id' => $user->id,
            'validator_id' => $validated['validator_id'],
            'car_id' => $validated['instalment_id'],
            'car_month_option_id' => $validated['months'],
            'admin_notes' => $validated['notes']
        ]);

        return response()->json([
            'message' => 'Applying for Instalment successful'
        ], 200);
    }
}
