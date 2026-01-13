<?php

namespace App\Http\Resources\Society;

use App\Http\Resources\Regional\RegionalResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SocietyLoginResource extends JsonResource
{
    protected $token;

    public function __construct($resource, $token)
    {
        parent::__construct($resource);
        $this->token = $token;
    }
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "name" => $this->name,
            "born_date" => $this->born_date,
            "gender" => $this->gender,
            "address" => $this->address,
            "token" => $this->token,
            "regional" => new RegionalResource($this->regional)
        ];
    }
}
