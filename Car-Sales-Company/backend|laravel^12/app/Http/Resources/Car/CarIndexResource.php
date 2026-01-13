<?php

namespace App\Http\Resources\Car;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarIndexResource extends JsonResource
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
            'car' => $this->car,
            'brand' => $this->brand,
            'price' => $this->price,
            'description' => $this->description,
            'available_month' => CarMonthOptionResource::collection($this->car_month_options)
        ];
    }
}
