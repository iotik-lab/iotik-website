<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class CandlingResource extends JsonResource
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
            'incubator_name' => $this->incubator->name,
            'original_image' => asset("storage/candling/" . "$this->original_image"),
            'predicted_image' => asset("storage/predicted/" . "$this->predicted_image"),
            'fertily' => $this->fertily,
            'unfertily' => $this->unfertily,
            'created_at' => $this->created_at
        ];
    }
}
