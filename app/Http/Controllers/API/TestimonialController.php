<?php

namespace App\Http\Controllers\API;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Testimonial as ResourcesTestimonial;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class TestimonialController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return $this->handleResponse(ResourcesTestimonial::collection($testimonials), __('notifications.find_all_testimonials_success'));
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
            'body' => $request->body,
            'image_url' => $request->image_url,
            'is_active' => $request->is_active
        ];

        $testimonial = Testimonial::create($inputs);

        return $this->handleResponse(new ResourcesTestimonial($testimonial), __('notifications.create_testimonial_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::find($id);

        if (is_null($testimonial)) {
            return $this->handleError(__('notifications.find_testimonial_404'));
        }

        return $this->handleResponse(new ResourcesTestimonial($testimonial), __('notifications.find_testimonial_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        // Get inputs
        $inputs = [
            'fullname' => $request->fullname,
            'body' => $request->body,
            'image_url' => $request->image_url,
            'is_active' => $request->is_active
        ];

        if ($inputs['fullname'] != null) {
            $testimonial->update([
                'fullname' => $request->fullname,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['body'] != null) {
            $testimonial->update([
                'body' => $request->body,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['image_url'] != null) {
            $testimonial->update([
                'image_url' => $request->image_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['is_active'] != null) {
            $testimonial->update([
                'is_active' => $request->is_active,
                'updated_at' => now(),
            ]);
        }

        return $this->handleResponse(new ResourcesTestimonial($testimonial), __('notifications.update_testimonial_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        $testimonials = Testimonial::all();

        return $this->handleResponse(ResourcesTestimonial::collection($testimonials), __('notifications.delete_testimonial_success'));
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
            'testimonial_id' => $request->testimonial_id,
            'image_64' => $request->image_64
        ];
        $replace = substr($inputs['image_64'], 0, strpos($inputs['image_64'], ',') + 1);
        // Find substring from replace here eg: data:image/png;base64,
        $image = str_replace($replace, '', $inputs['image_64']);
        $image = str_replace(' ', '+', $image);

        // Create image URL
		$image_url = 'testimonials/' . $id . '/' . Str::random(50) . '.png';

		// Upload image
		Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

		$testimonial = Testimonial::find($id);

        $testimonial->update([
            'image_url' => $image_url,
            'updated_at' => now()
        ]);

        return $this->handleResponse(new ResourcesTestimonial($testimonial), __('notifications.update_testimonial_success'));
    }
}
