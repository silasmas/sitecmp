<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\User as ResourcesUser;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderByDesc('created_at')->get();

        return $this->handleResponse(ResourcesUser::collection($users), __('notifications.find_all_users_success'));
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
            'email' => $request->email,
            'avatar' => $request->avatar,
            'email_verified_at' => $request->email_verified_at,
            'password' => $request->password,
            'confirm_password' => $request->confirm_password,
            'remember_token' => $request->remember_token,
            'settings' => $request->settings,
            'organiser_id' => $request->organiser_id
        ];
        $users = User::all();

        // Validate required fields
        if (trim($inputs['firstname'] == null)) {
            return $this->handleError($inputs['firstname'], __('validation.required'), 400);
        }

        if (trim($inputs['email']) == null) {
            return $this->handleError($inputs['email'], __('validation.required'), 400);
        }

        if ($inputs['email'] != null) {
            // Check if user email already exists
            foreach ($users as $another_user):
                if ($another_user->email == $inputs['email']) {
                    return $this->handleError($inputs['email'], __('validation.custom.email.exists'), 400);
                }
            endforeach;
        }

        if ($inputs['confirm_password'] != $inputs['password'] OR $inputs['confirm_password'] == null) {
            return $this->handleError($inputs['confirm_password'], __('confirm_pa'), 400);
        }

        $user = User::create($inputs);

        if ($request->role_id != null) {
            $user->roles->attach([$request->role_id]);
        }

        return $this->handleResponse($user, __('notifications.create_user_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            return $this->handleError(__('notifications.find_user_404'));
        }

        return $this->handleResponse(new ResourcesUser($user), __('notifications.find_user_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // Get inputs
        $inputs = [
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $request->avatar,
            'email_verified_at' => $request->email_verified_at,
            'password' => $request->password,
            'confirm_password' => $request->confirm_password,
            'remember_token' => $request->remember_token,
            'settings' => $request->settings,
            'organiser_id' => $request->organiser_id
        ];
        $users = User::all();
        $current_user = User::find($inputs['id']);

        if ($inputs['name'] != null) {
            $user->update([
                'name' => $request->name,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['email'] != null) {
            // Check if email already exists
            foreach ($users as $another_user):
                if ($current_user->email != $inputs['email']) {
                    if ($another_user->email == $inputs['email']) {
                        return $this->handleError($inputs['email'], __('validation.custom.email.exists'), 400);
                    }
                }
            endforeach;

            $user->update([
                'email' => $request->email,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['avatar'] != null) {
            $user->update([
                'avatar' => $request->avatar,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['email_verified_at'] != null) {
            $user->update([
                'email_verified_at' => $request->email_verified_at,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['settings'] != null) {
            $user->update([
                'settings' => $request->settings,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['organiser_id'] != null) {
            $user->update([
                'organiser_id' => $request->organiser_id,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['password'] != null) {
            if ($inputs['confirm_password'] != $inputs['password'] OR $inputs['confirm_password'] == null) {
                return $this->handleError($inputs['confirm_password'], __('notifications.confirm_password_error'), 400);
            }

            // Otherwise, update it.
            $inputs['password'] = Hash::make($inputs['password']);

            $user->update([
                'password' => $inputs['password'],
                'updated_at' => now(),
            ]);
        }

        if ($request->role_id != null) {
            $user->roles->sync([$request->role_id]);
        }

        return $this->handleResponse(new ResourcesUser($user), __('notifications.update_user_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        $users = User::orderByDesc('created_at')->get();

        return $this->handleResponse(ResourcesUser::collection($users), __('notifications.delete_user_success'));
    }

    // ==================================== CUSTOM METHODS ====================================
    /**
     * Search all users having a specific role
     *
     * @param  string $name
     * @return \Illuminate\Http\Response
     */
    public function findByRole($name)
    {
        $users = User::whereHas('roles', function ($query) use ($name) {
                                    $query->where('name', $name);
                                })->orderByDesc('created_at')->get();

        return $this->handleResponse(ResourcesUser::collection($users), __('notifications.find_all_users_success'));    
    }

    /**
     * Search all users having a role different than the given
     *
     * @param  string $name
     * @return \Illuminate\Http\Response
     */
    public function findByNotRole($name)
    {
        $users = User::whereDoesntHave('roles', function ($query) use ($name) {
                                    $query->where('name', $name);
                                })->orderByDesc('created_at')->get();

        return $this->handleResponse(ResourcesUser::collection($users), __('notifications.find_all_users_success'));    
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Get inputs
        $inputs = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if ($inputs['username'] == null OR $inputs['username'] == ' ') {
            return $this->handleError($inputs['username'], __('validation.required'), 400);
        }

        if ($inputs['password'] == null) {
            return $this->handleError($inputs['password'], __('validation.required'), 400);
        }

        if (is_numeric($inputs['username'])) {
            $user = User::where('phone', $inputs['username'])->first();

            if (!$user) {
                return $this->handleError($inputs['username'], __('auth.username'), 400);
            }

            if (!Hash::check($inputs['password'], $user->password)) {
                return $this->handleError($inputs['password'], __('auth.password'), 400);
            }

            return $this->handleResponse(new ResourcesUser($user), __('notifications.find_user_success'));

        } else {
            $user = User::where('email', $inputs['username'])->orWhere('username', $inputs['username'])->first();

            if (!$user) {
                return $this->handleError($inputs['username'], __('auth.username'), 400);
            }

            if (!Hash::check($inputs['password'], $user->password)) {
                return $this->handleError($inputs['password'], __('auth.password'), 400);
            }

            return $this->handleResponse(new ResourcesUser($user), __('notifications.find_user_success'));
        }
    }

    /**
     * Update user password in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @param  int $visitor_id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, $id, $visitor_id)
    {
        // Get inputs
        $inputs = [
            'former_password' => $request->former_password,
            'new_password' => $request->new_password,
            'confirm_new_password' => $request->confirm_new_password
        ];
        $user = User::find($id);

        if ($inputs['former_password'] == null) {
            return $this->handleError($inputs['former_password'], __('validation.custom.former_password.empty'), 400);
        }

        if ($inputs['new_password'] == null) {
            return $this->handleError($inputs['new_password'], __('validation.custom.new_password.empty'), 400);
        }

        if ($inputs['confirm_new_password'] == null) {
            return $this->handleError($inputs['confirm_new_password'], __('notifications.confirm_new_password'), 400);
        }

        if (Hash::check($inputs['former_password'], $user->password) == false) {
            return $this->handleError($inputs['former_password'], __('auth.password'), 400);
        }

        if ($inputs['confirm_new_password'] != $inputs['new_password']) {
            return $this->handleError($inputs['confirm_new_password'], __('notifications.confirm_new_password'), 400);
        }

        // update "password"
        $user->update([
            'password' => Hash::make($inputs['new_password']),
            'updated_at' => now()
        ]);

        return $this->handleResponse(new ResourcesUser($user), __('notifications.update_password_success'));
    }

    /**
     * Update user avatar picture in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAvatarPicture(Request $request, $id)
    {
        $inputs = [
            'user_id' => $request->user_id,
            'image_64' => $request->image_64
        ];
        $replace = substr($inputs['image_64'], 0, strpos($inputs['image_64'], ',') + 1);
        // Find substring from replace here eg: data:image/png;base64,
        $image = str_replace($replace, '', $inputs['image_64']);
        $image = str_replace(' ', '+', $image);

        // Create image URL
		$image_url = 'users/' . $id . '/' . Str::random(50) . '.png';

		// Upload image
		Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

		$user = User::find($id);

        $user->update([
            'avatar' => $image_url,
            'updated_at' => now()
        ]);

        return $this->handleResponse(new ResourcesUser($user), __('notifications.update_user_success'));
    }
}
