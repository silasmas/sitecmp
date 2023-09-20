<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class Entity extends JsonResource
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
            'designation' => $this->designation,
            'type' => $this->type,
            'titulaire' => $this->titulaire,
            'adresse' => $this->adresse,
            'image_url' => $this->image_url,
            'link_facebook' => $this->link_facebook,
            'link_instagram' => $this->link_instagram,
            'link_twitter' => $this->link_twitter,
            'website' => $this->website,
            'minister_id' => $this->minister_id,
            'is_active' => $this->is_active,
            'contact' => $this->contact,
            'programs' => Program::collection($this->programs),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
