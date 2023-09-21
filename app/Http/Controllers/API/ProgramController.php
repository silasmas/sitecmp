<?php

namespace App\Http\Controllers\API;

use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Program as ResourcesProgram;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class ProgramController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();

        return $this->handleResponse(ResourcesProgram::collection($programs), __('notifications.find_all_programs_success'));
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
            'description' => $request->description,
            'entity_id' => $request->entity_id,
            'is_active' => $request->is_active,
            'image_url' => $request->image_url
        ];

        $program = Program::create($inputs);

        return $this->handleResponse(new ResourcesProgram($program), __('notifications.create_program_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = Program::find($id);

        if (is_null($program)) {
            return $this->handleError(__('notifications.find_program_404'));
        }

        return $this->handleResponse(new ResourcesProgram($program), __('notifications.find_program_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        // Get inputs
        $inputs = [
            'id' => $request->id,
            'designation' => $request->designation,
            'description' => $request->description,
            'entity_id' => $request->entity_id,
            'is_active' => $request->is_active,
            'image_url' => $request->image_url
        ];

        if ($inputs['designation'] != null) {
            $program->update([
                'designation' => $request->designation,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['description'] != null) {
            $program->update([
                'description' => $request->description,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['entity_id'] != null) {
            $program->update([
                'entity_id' => $request->entity_id,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['is_active'] != null) {
            $program->update([
                'is_active' => $request->is_active,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['image_url'] != null) {
            $program->update([
                'image_url' => $request->image_url,
                'updated_at' => now(),
            ]);
        }

        return $this->handleResponse(new ResourcesProgram($program), __('notifications.update_program_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->delete();

        $programs = Program::all();

        return $this->handleResponse(ResourcesProgram::collection($programs), __('notifications.delete_program_success'));
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
            'program_id' => $request->program_id,
            'image_64' => $request->image_64
        ];
        $replace = substr($inputs['image_64'], 0, strpos($inputs['image_64'], ',') + 1);
        // Find substring from replace here eg: data:image/png;base64,
        $image = str_replace($replace, '', $inputs['image_64']);
        $image = str_replace(' ', '+', $image);

        // Create image URL
		$image_url = 'programs/' . $id . '/' . Str::random(50) . '.png';

		// Upload image
		Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

		$program = Program::find($id);

        $program->update([
            'image_url' => $image_url,
            'updated_at' => now()
        ]);

        return $this->handleResponse(new ResourcesProgram($program), __('notifications.update_program_success'));
    }
}
