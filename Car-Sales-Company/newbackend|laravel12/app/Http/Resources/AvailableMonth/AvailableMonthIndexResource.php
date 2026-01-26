<?php

namespace App\Http\Resources\AvailableMonth;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvailableMonthIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'month' => $this->month,
            'description' => $this->description,
            'nominal' => $this->nominal
        ];
    }
}
