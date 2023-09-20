<?php

namespace App\Http\Controllers\API;

use App\Models\Faithful;
use Illuminate\Http\Request;
use App\Http\Resources\Faithful as ResourcesFaithful;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class FaithfulController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faithfuls = Faithful::all();

        return $this->handleResponse(ResourcesFaithful::collection($faithfuls), __('notifications.find_all_faithfuls_success'));
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
            'email' => $request->email,
            'phone' => $request->phone,
            'commune' => $request->commune,
            'adresse' => $request->adresse,
            'est_membre' => $request->est_membre,
            'is_active' => $request->is_active,
            'ville' => $request->ville,
            'pays' => $request->pays
        ];

        $faithful = Faithful::create($inputs);

        return $this->handleResponse(new ResourcesFaithful($faithful), __('notifications.create_faithful_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faithful = Faithful::find($id);

        if (is_null($faithful)) {
            return $this->handleError(__('notifications.find_faithful_404'));
        }

        return $this->handleResponse(new ResourcesFaithful($faithful), __('notifications.find_faithful_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faithful  $faithful
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faithful $faithful)
    {
        // Get inputs
        $inputs = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'commune' => $request->commune,
            'adresse' => $request->adresse,
            'est_membre' => $request->est_membre,
            'is_active' => $request->is_active,
            'ville' => $request->ville,
            'pays' => $request->pays
        ];

        if ($inputs['fullname'] != null) {
            $faithful->update([
                'fullname' => $request->fullname,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['email'] != null) {
            $faithful->update([
                'email' => $request->email,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['phone'] != null) {
            $faithful->update([
                'phone' => $request->phone,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['commune'] != null) {
            $faithful->update([
                'commune' => $request->commune,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['adresse'] != null) {
            $faithful->update([
                'adresse' => $request->adresse,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['est_membre'] != null) {
            $faithful->update([
                'est_membre' => $request->est_membre,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['is_active'] != null) {
            $faithful->update([
                'is_active' => $request->is_active,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['ville'] != null) {
            $faithful->update([
                'ville' => $request->ville,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['pays'] != null) {
            $faithful->update([
                'pays' => $request->pays,
                'updated_at' => now(),
            ]);
        }

        return $this->handleResponse(new ResourcesFaithful($faithful), __('notifications.update_faithful_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faithful  $faithful
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faithful $faithful)
    {
        $faithful->delete();

        $faithfuls = Faithful::all();

        return $this->handleResponse(ResourcesFaithful::collection($faithfuls), __('notifications.delete_faithful_success'));
    }
}
