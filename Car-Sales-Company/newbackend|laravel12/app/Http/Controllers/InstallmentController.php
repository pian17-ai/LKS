<?php

namespace App\Http\Controllers;

use App\Http\Resources\Installment\InstallmentIndexResource;
use App\Http\Resources\Installment\InstallmentShowResource;
use App\Models\Installment;
use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    public function index() {
        $installments = Installment::all();
        $installments->load(['brand', 'available_month']);

        return InstallmentIndexResource::collection($installments);
    }

    public function show(Installment $installment) {
        return new InstallmentShowResource($installment);
    }
}
