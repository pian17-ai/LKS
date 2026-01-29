<?php

namespace App\Http\Resources\Installment;

use App\Http\Resources\AvailableMonth\AvailableMonthIndexResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstallmentShowResource extends JsonResource
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
            'car' => $this->cars,
            'brand' => $this->brand->brand,
            'price' => $this->price,
            'description' => $this->description,
            'available_month' => AvailableMonthIndexResource::collection($this->available_month)
        ];
    }
}