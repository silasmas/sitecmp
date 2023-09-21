<?php

namespace App\Http\Controllers\API;

use App\Models\Minister;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Minister as ResourcesMinister;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class MinisterController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ministers = Minister::all();

        return $this->handleResponse(ResourcesMinister::collection($ministers), __('notifications.find_all_ministers_success'));
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
            'fullname' => $request->fullname,
            'image_url' => $request->image_url,
            'bio' => $request->bio,
            'is_titular' => $request->is_titular,
            'is_active' => $request->is_active,
            'contact' => $request->contact,
            'type' => $request->type,
            'facebook_url' => $request->facebook_url,
            'instagram_url' => $request->instagram_url,
            'twitter_url' => $request->twitter_url,
            'youtube_url' => $request->youtube_url
        ];

        $minister = Minister::create($inputs);

        return $this->handleResponse(new ResourcesMinister($minister), __('notifications.create_minister_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $minister = Minister::find($id);

        if (is_null($minister)) {
            return $this->handleError(__('notifications.find_minister_404'));
        }

        return $this->handleResponse(new ResourcesMinister($minister), __('notifications.find_minister_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Minister  $minister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Minister $minister)
    {
        // Get inputs
        $inputs = [
            'id' => $request->id,
            'fullname' => $request->fullname,
            'image_url' => $request->image_url,
            'bio' => $request->bio,
            'is_titular' => $request->is_titular,
            'is_active' => $request->is_active,
            'contact' => $request->contact,
            'type' => $request->type,
            'facebook_url' => $request->facebook_url,
            'instagram_url' => $request->instagram_url,
            'twitter_url' => $request->twitter_url,
            'youtube_url' => $request->youtube_url
        ];

        if ($inputs['fullname'] != null) {
            $minister->update([
                'fullname' => $request->fullname,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['image_url'] != null) {
            $minister->update([
                'image_url' => $request->image_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['bio'] != null) {
            $minister->update([
                'bio' => $request->bio,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['is_titular'] != null) {
            $minister->update([
                'is_titular' => $request->is_titular,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['is_active'] != null) {
            $minister->update([
                'is_active' => $request->is_active,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['contact'] != null) {
            $minister->update([
                'contact' => $request->contact,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['type'] != null) {
            $minister->update([
                'type' => $request->type,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['facebook_url'] != null) {
            $minister->update([
                'facebook_url' => $request->facebook_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['instagram_url'] != null) {
            $minister->update([
                'instagram_url' => $request->instagram_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['twitter_url'] != null) {
            $minister->update([
                'twitter_url' => $request->twitter_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['youtube_url'] != null) {
            $minister->update([
                'youtube_url' => $request->youtube_url,
                'updated_at' => now(),
            ]);
        }

        return $this->handleResponse(new ResourcesMinister($minister), __('notifications.update_minister_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Minister  $minister
     * @return \Illuminate\Http\Response
     */
    public function destroy(Minister $minister)
    {
        $minister->delete();

        $ministers = Minister::all();

        return $this->handleResponse(ResourcesMinister::collection($ministers), __('notifications.delete_minister_success'));
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
            'minister_id' => $request->minister_id,
            'image_64' => $request->image_64
        ];
        $replace = substr($inputs['image_64'], 0, strpos($inputs['image_64'], ',') + 1);
        // Find substring from replace here eg: data:image/png;base64,
        $image = str_replace($replace, '', $inputs['image_64']);
        $image = str_replace(' ', '+', $image);

        // Create image URL
		$image_url = 'ministers/' . $id . '/' . Str::random(50) . '.png';

		// Upload image
		Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

		$minister = Minister::find($id);

        $minister->update([
            'image_url' => $image_url,
            'updated_at' => now()
        ]);

        return $this->handleResponse(new ResourcesMinister($minister), __('notifications.update_minister_success'));
    }
}
