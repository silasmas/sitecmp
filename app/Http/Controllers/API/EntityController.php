<?php

namespace App\Http\Controllers\API;

use App\Models\Entity;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Entity as ResourcesEntity;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class EntityController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entities = Entity::all();

        return $this->handleResponse(ResourcesEntity::collection($entities), __('notifications.find_all_entities_success'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Get inputs
        $inputs = [
            'designation' => $request->designation,
            'type' => $request->type,
            'titulaire' => $request->titulaire,
            'adresse' => $request->adresse,
            'image_url' => $request->image_url,
            'link_facebook' => $request->link_facebook,
            'link_instagram' => $request->link_instagram,
            'link_twitter' => $request->link_twitter,
            'website' => $request->website,
            'minister_id' => $request->minister_id,
            'is_active' => $request->is_active,
            'contact' => $request->contact
        ];

        $entity = Entity::create($inputs);

        return $this->handleResponse(new ResourcesEntity($entity), __('notifications.create_entity_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entity = Entity::find($id);

        if (is_null($entity)) {
            return $this->handleError(__('notifications.find_entity_404'));
        }

        return $this->handleResponse(new ResourcesEntity($entity), __('notifications.find_entity_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entity $entity)
    {
        // Get inputs
        $inputs = [
            'id' => $request->id,
            'designation' => $request->designation,
            'type' => $request->type,
            'titulaire' => $request->titulaire,
            'adresse' => $request->adresse,
            'image_url' => $request->image_url,
            'link_facebook' => $request->link_facebook,
            'link_instagram' => $request->link_instagram,
            'link_twitter' => $request->link_twitter,
            'website' => $request->website,
            'minister_id' => $request->minister_id,
            'is_active' => $request->is_active,
            'contact' => $request->contact
        ];

        if ($inputs['designation'] != null) {
            $entity->update([
                'designation' => $request->designation,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['type'] != null) {
            $entity->update([
                'type' => $request->type,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['titulaire'] != null) {
            $entity->update([
                'titulaire' => $request->titulaire,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['adresse'] != null) {
            $entity->update([
                'adresse' => $request->adresse,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['image_url'] != null) {
            $entity->update([
                'image_url' => $request->image_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['link_facebook'] != null) {
            $entity->update([
                'link_facebook' => $request->link_facebook,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['link_instagram'] != null) {
            $entity->update([
                'link_instagram' => $request->link_instagram,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['link_twitter'] != null) {
            $entity->update([
                'link_twitter' => $request->link_twitter,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['website'] != null) {
            $entity->update([
                'website' => $request->website,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['minister_id'] != null) {
            $entity->update([
                'minister_id' => $request->minister_id,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['is_active'] != null) {
            $entity->update([
                'is_active' => $request->is_active,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['contact'] != null) {
            $entity->update([
                'contact' => $request->contact,
                'updated_at' => now(),
            ]);
        }

        return $this->handleResponse(new ResourcesEntity($entity), __('notifications.update_entity_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entity $entity)
    {
        $entity->delete();

        $entities = Entity::all();

        return $this->handleResponse(ResourcesEntity::collection($entities), __('notifications.delete_entity_success'));
    }

    // ==================================== CUSTOM METHODS ====================================
    /**
     * Update picture in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePicture(Request $request, $id)
    {
        $inputs = [
            'entity_id' => $request->entity_id,
            'image_64' => $request->image_64
        ];
        $replace = substr($inputs['image_64'], 0, strpos($inputs['image_64'], ',') + 1);
        // Find substring from replace here eg: data:image/png;base64,
        $image = str_replace($replace, '', $inputs['image_64']);
        $image = str_replace(' ', '+', $image);

        // Create image URL
		$image_url = 'entities/' . $id . '/' . Str::random(50) . '.png';

		// Upload image
		Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

		$entity = Entity::find($id);

        $entity->update([
            'image_url' => $image_url,
            'updated_at' => now()
        ]);

        return $this->handleResponse(new ResourcesEntity($entity), __('notifications.update_entity_success'));
    }
}
