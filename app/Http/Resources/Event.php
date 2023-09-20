<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class Event extends JsonResource
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
            'lieu' => $this->lieu,
            'orateur' => $this->orateur,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin,
            'is_active' => $this->is_active,
            'theme' => $this->theme,
            'references' => $this->references,
            'image_url' => $this->image_url,
            'est_a_la_une' => $this->est_a_la_une,
            'description' => $this->description,
            'posts' => Post::collection($this->posts),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
