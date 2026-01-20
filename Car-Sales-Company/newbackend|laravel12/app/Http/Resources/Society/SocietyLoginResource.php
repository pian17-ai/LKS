<?php

namespace App\Http\Resources\Society;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SocietyLoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    protected $token;

    public function __construct($resource, $token)
    {
        parent::__construct($resource);
        $this->token = $token;
    }

    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'born_date' => $this->born_date,
            'gender' => $this->gender,
            'address' => $this->address,
            'token' => $this->token,
            'regional' => [
                'id' => $this->regional->id,
                'province' => $this->regional->province,
                'district' => $this->regional->district
            ]
        ];
    }
}
