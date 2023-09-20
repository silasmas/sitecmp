<?php

namespace App\Http\Controllers\API;

use App\Models\Good;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Good as ResourcesGood;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class GoodController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Good::all();

        return $this->handleResponse(ResourcesGood::collection($goods), __('notifications.find_all_goods_success'));
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
            'image_url' => $request->image_url,
            'price' => $request->price,
            'description' => $request->description,
            'project_id' => $request->project_id,
            'is_active' => $request->is_active
        ];

        $good = Good::create($inputs);

        return $this->handleResponse(new ResourcesGood($good), __('notifications.create_good_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $good = Good::find($id);

        if (is_null($good)) {
            return $this->handleError(__('notifications.find_good_404'));
        }

        return $this->handleResponse(new ResourcesGood($good), __('notifications.find_good_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Good $good)
    {
        // Get inputs
        $inputs = [
            'designation' => $request->designation,
            'image_url' => $request->image_url,
            'price' => $request->price,
            'description' => $request->description,
            'project_id' => $request->project_id,
            'is_active' => $request->is_active
        ];

        if ($inputs['designation'] != null) {
            $good->update([
                'designation' => $request->designation,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['image_url'] != null) {
            $good->update([
                'image_url' => $request->image_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['price'] != null) {
            $good->update([
                'price' => $request->price,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['description'] != null) {
            $good->update([
                'description' => $request->description,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['project_id'] != null) {
            $good->update([
                'project_id' => $request->project_id,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['is_active'] != null) {
            $good->update([
                'is_active' => $request->is_active,
                'updated_at' => now(),
            ]);
        }

        return $this->handleResponse(new ResourcesGood($good), __('notifications.update_good_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function destroy(Good $good)
    {
        $good->delete();

        $goods = Good::all();

        return $this->handleResponse(ResourcesGood::collection($goods), __('notifications.delete_good_success'));
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
            'good_id' => $request->good_id,
            'image_64' => $request->image_64
        ];
        $replace = substr($inputs['image_64'], 0, strpos($inputs['image_64'], ',') + 1);
        // Find substring from replace here eg: data:image/png;base64,
        $image = str_replace($replace, '', $inputs['image_64']);
        $image = str_replace(' ', '+', $image);

        // Create image URL
		$image_url = 'goods/' . $id . '/' . Str::random(50) . '.png';

		// Upload image
		Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

		$good = Good::find($id);

        $good->update([
            'image_url' => $image_url,
            'updated_at' => now()
        ]);

        return $this->handleResponse(new ResourcesGood($good), __('notifications.update_good_success'));
    }
}
