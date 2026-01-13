<?php

namespace App\Http\Resources\InstalmentApplication;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstalmentApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'car' => $this->car->car,
            'brand' => $this->car->brand,
            'price' => $this->car->price,
            'description' => $this->car->description,
            'applications' => [
                'month' => $this->month,
                'nominal' => $this->nominal,
                'apply_status' => $this->apply_status,
                'notes' => $this->notes
            ]
        ];
    }
}
