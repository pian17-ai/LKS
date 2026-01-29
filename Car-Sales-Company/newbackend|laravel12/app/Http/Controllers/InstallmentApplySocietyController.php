<?php

namespace App\Http\Controllers;

use App\Http\Resources\Applications\ApplicationShowResource;
use App\Models\AvailableMonth;
use App\Models\InstallmentApplySociety;
use App\Models\InstallmentApplyStatus;
use App\Models\Validation;
use Illuminate\Http\Request;

use function Symfony\Component\Clock\now;

class InstallmentApplySocietyController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'installment_id' => 'required|exists:installments,id',
            'months' => 'required',
            'notes' => 'required'
        ]);

        $user = $request->user();

        $validation = Validation::where('society_id', $user->id)->first();

        if ($validation->status != 'accepted') {
            return response()->json([
                'message' => 'Your data validator must be accepted by validator before'
            ], 401);
        }

        $checkAlready = InstallmentApplySociety::where('society_id', $user->id)->where('installment_id', $validated['installment_id'])->first();

        if ($checkAlready) {
            return response()->json([
                'message' => 'Application for a instalment can only be once'
            ], 401);
        }


        $month = AvailableMonth::where('installment_id', $validated['installment_id'])->where('month', $validated['months'])->first();

        $apply = InstallmentApplySociety::create([
            'notes' => $validated['notes'],
            'available_month_id' => $month->id,
            'date' => now(),
            'society_id' => $user->id,
            'installment_id' => $validated['installment_id']
        ]);

        InstallmentApplyStatus::create([
            'date' => now(),
            'society_id' => $user->id,
            'installment_id' => $validated['installment_id'],
            'available_month_id' => $month->id,
            'installment_apply_societies_id' => $apply->id
        ]);

        return response()->json([
            'message' => 'Applying for Instalment successful'
        ]);
    }

    public function index(Request $request)
    {
        $user = $request->user();

        $installment = InstallmentApplyStatus::where('society_id', $user->id)->get();

        if (!$installment) {
            return response()->json([
                'message' => 'Applications is empty'
            ]);
        }

        $installment->load(['installment', 'available_month', 'installment_apply_society']);

        return response()->json([
            'installments' => ApplicationShowResource::collection($installment)
        ]);
    }
}
