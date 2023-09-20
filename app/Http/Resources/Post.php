<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class Post extends JsonResource
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
            'title' => $this->title,
            'type' => $this->type,
            'link_url' => $this->link_url,
            'image_url' => $this->image_url,
            'body' => $this->body,
            'author' => $this->author,
            'observation' => $this->observation,
            'is_active' => $this->is_active,
            'references' => $this->references,
            'date_publication' => $this->date_publication,
            'fichier_url' => $this->fichier_url,
            'galleries' => Gallery::collection($this->galleries),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
            'event_id' => $this->event_id,
            'minister_id' => $this->minister_id
        ];
    }
}
