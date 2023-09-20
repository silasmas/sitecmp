<?php

namespace App\Http\Controllers\API;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Resources\Gallery as ResourcesGallery;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class GalleryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();

        return $this->handleResponse(ResourcesGallery::collection($galleries), __('notifications.find_all_galleries_success'));
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
            'image_url' => $request->image_url,
            'description' => $request->description,
            'is_active' => $request->is_active,
            'post_id' => $request->post_id,
            'project_id' => $request->project_id
        ];

        $gallery = Gallery::create($inputs);

        return $this->handleResponse(new ResourcesGallery($gallery), __('notifications.create_gallery_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::find($id);

        if (is_null($gallery)) {
            return $this->handleError(__('notifications.find_gallery_404'));
        }

        return $this->handleResponse(new ResourcesGallery($gallery), __('notifications.find_gallery_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        // Get inputs
        $inputs = [
            'image_url' => $request->image_url,
            'description' => $request->description,
            'is_active' => $request->is_active,
            'post_id' => $request->post_id,
            'project_id' => $request->project_id
        ];

        if ($inputs['image_url'] != null) {
            $gallery->update([
                'image_url' => $request->image_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['description'] != null) {
            $gallery->update([
                'description' => $request->description,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['is_active'] != null) {
            $gallery->update([
                'is_active' => $request->is_active,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['post_id'] != null) {
            $gallery->update([
                'post_id' => $request->post_id,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['project_id'] != null) {
            $gallery->update([
                'project_id' => $request->project_id,
                'updated_at' => now(),
            ]);
        }

        return $this->handleResponse(new ResourcesGallery($gallery), __('notifications.update_gallery_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        $galleries = Gallery::all();

        return $this->handleResponse(ResourcesGallery::collection($galleries), __('notifications.delete_gallery_success'));
    }
}
