<?php

namespace App\Http\Controllers\API;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Resources\Role as ResourcesRole;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class RoleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return $this->handleResponse(ResourcesRole::collection($roles), __('notifications.find_all_roles_success'));
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
            'name' => $request->name,
            'display_name' => $request->display_name
        ];
        // Select all roles to check unique constraint
        $roles = Role::all();

        // Validate required fields
        if (trim($inputs['name']) == null) {
            return $this->handleError($inputs['name'], __('validation.required'), 400);
        }

        // Check if role name already exists
        foreach ($roles as $another_role):
            if ($another_role->name == $inputs['name']) {
                $another_role->update([
                    'name' => $request->name,
                    'display_name' => $request->display_name,
                    'updated_at' => now()
                ]);
            }
        endforeach;

        $role = Role::create($inputs);

        return $this->handleResponse(new ResourcesRole($role), __('notifications.create_role_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);

        if (is_null($role)) {
            return $this->handleError(__('notifications.find_role_404'));
        }

        return $this->handleResponse(new ResourcesRole($role), __('notifications.find_role_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        // Get inputs
        $inputs = [
            'id' => $request->id,
            'name' => $request->name,
            'display_name' => $request->display_name
        ];
        // Select all roles and specific role to check unique constraint
        $roles = Role::all();
        $current_role = Role::find($inputs['id']);

        if ($inputs['name'] != null) {
            foreach ($roles as $another_role):
                if ($current_role->name != $inputs['name']) {
                    if ($another_role->name == $inputs['name']) {
                        $another_role->update([
                            'name' => $request->name,
                            'updated_at' => now()
                        ]);
                    }
                }
            endforeach;

            $role->update([
                'name' => $request->name,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['display_name'] != null) {
            $role->update([
                'display_name' => $request->display_name,
                'updated_at' => now(),
            ]);
        }

        return $this->handleResponse(new ResourcesRole($role), __('notifications.update_role_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        $roles = Role::all();

        return $this->handleResponse(ResourcesRole::collection($roles), __('notifications.delete_role_success'));
    }
}
