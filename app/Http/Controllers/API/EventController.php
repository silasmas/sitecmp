<?php

namespace App\Http\Controllers\API;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Event as ResourcesEvent;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class EventController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return $this->handleResponse(ResourcesEvent::collection($events), __('notifications.find_all_events_success'));
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
            'lieu' => $request->lieu,
            'orateur' => $request->orateur,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'is_active' => $request->is_active,
            'theme' => $request->theme,
            'references' => $request->references,
            'image_url' => $request->image_url,
            'est_a_la_une' => $request->est_a_la_une,
            'description' => $request->description
        ];

        $event = Event::create($inputs);

        return $this->handleResponse(new ResourcesEvent($event), __('notifications.create_event_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);

        if (is_null($event)) {
            return $this->handleError(__('notifications.find_event_404'));
        }

        return $this->handleResponse(new ResourcesEvent($event), __('notifications.find_event_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        // Get inputs
        $inputs = [
            'designation' => $request->designation,
            'type' => $request->type,
            'lieu' => $request->lieu,
            'orateur' => $request->orateur,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'is_active' => $request->is_active,
            'theme' => $request->theme,
            'references' => $request->references,
            'image_url' => $request->image_url,
            'est_a_la_une' => $request->est_a_la_une,
            'description' => $request->description
        ];

        if ($inputs['designation'] != null) {
            $event->update([
                'designation' => $request->designation,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['type'] != null) {
            $event->update([
                'type' => $request->type,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['lieu'] != null) {
            $event->update([
                'lieu' => $request->lieu,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['orateur'] != null) {
            $event->update([
                'orateur' => $request->orateur,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['date_debut'] != null) {
            $event->update([
                'date_debut' => $request->date_debut,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['date_fin'] != null) {
            $event->update([
                'date_fin' => $request->date_fin,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['is_active'] != null) {
            $event->update([
                'is_active' => $request->is_active,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['theme'] != null) {
            $event->update([
                'theme' => $request->theme,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['references'] != null) {
            $event->update([
                'references' => $request->references,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['image_url'] != null) {
            $event->update([
                'image_url' => $request->image_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['est_a_la_une'] != null) {
            $event->update([
                'est_a_la_une' => $request->est_a_la_une,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['description'] != null) {
            $event->update([
                'description' => $request->description,
                'updated_at' => now(),
            ]);
        }

        return $this->handleResponse(new ResourcesEvent($event), __('notifications.update_event_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        $events = Event::all();

        return $this->handleResponse(ResourcesEvent::collection($events), __('notifications.delete_event_success'));
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
            'event_id' => $request->event_id,
            'image_64' => $request->image_64
        ];
        $replace = substr($inputs['image_64'], 0, strpos($inputs['image_64'], ',') + 1);
        // Find substring from replace here eg: data:image/png;base64,
        $image = str_replace($replace, '', $inputs['image_64']);
        $image = str_replace(' ', '+', $image);

        // Create image URL
		$image_url = 'events/' . $id . '/' . Str::random(50) . '.png';

		// Upload image
		Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

		$event = Event::find($id);

        $event->update([
            'image_url' => $image_url,
            'updated_at' => now()
        ]);

        return $this->handleResponse(new ResourcesEvent($event), __('notifications.update_event_success'));
    }
}
