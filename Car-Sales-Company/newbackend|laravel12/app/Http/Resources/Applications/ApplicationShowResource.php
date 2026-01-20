<?php

namespace App\Http\Resources\Applications;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->installment->id,
            'car' => $this->installment->cars,
            'brand' => $this->installment->brand->brand,
            'price' => $this->installment->price,
            'description' => $this->installment->description,
            'applications' => [
                'month' => $this->available_month->month,
                'nominal' => $this->available_month->nominal,
                'apply_status' => $this->status,
                'notes' => $this->installment_apply_society->notes
            ]
        ];
    }
}
