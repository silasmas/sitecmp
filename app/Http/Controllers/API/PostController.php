<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Post as ResourcesPost;
use App\Models\Gallery;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class PostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return $this->handleResponse(ResourcesPost::collection($posts), __('notifications.find_all_posts_success'));
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
            'title' => $request->title,
            'type' => $request->type,
            'link_url' => $request->link_url,
            'image_url' => $request->image_url,
            'body' => $request->body,
            'author' => $request->author,
            'observation' => $request->observation,
            'event_id' => $request->event_id,
            'is_active' => $request->is_active,
            'references' => $request->references,
            'date_publication' => $request->date_publication,
            'fichier_url' => $request->fichier_url,
            'minister_id' => $request->minister_id
        ];

        $post = Post::create($inputs);

        return $this->handleResponse(new ResourcesPost($post), __('notifications.create_post_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        if (is_null($post)) {
            return $this->handleError(__('notifications.find_post_404'));
        }

        return $this->handleResponse(new ResourcesPost($post), __('notifications.find_post_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // Get inputs
        $inputs = [
            'id' => $request->id,
            'title' => $request->title,
            'type' => $request->type,
            'link_url' => $request->link_url,
            'image_url' => $request->image_url,
            'body' => $request->body,
            'author' => $request->author,
            'observation' => $request->observation,
            'event_id' => $request->event_id,
            'is_active' => $request->is_active,
            'references' => $request->references,
            'date_publication' => $request->date_publication,
            'fichier_url' => $request->fichier_url,
            'minister_id' => $request->minister_id
        ];

        if ($inputs['title'] != null) {
            $post->update([
                'title' => $request->title,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['type'] != null) {
            $post->update([
                'type' => $request->type,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['link_url'] != null) {
            $post->update([
                'link_url' => $request->link_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['image_url'] != null) {
            $post->update([
                'image_url' => $request->image_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['body'] != null) {
            $post->update([
                'body' => $request->body,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['author'] != null) {
            $post->update([
                'author' => $request->author,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['observation'] != null) {
            $post->update([
                'observation' => $request->observation,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['event_id'] != null) {
            $post->update([
                'event_id' => $request->event_id,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['is_active'] != null) {
            $post->update([
                'is_active' => $request->is_active,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['references'] != null) {
            $post->update([
                'references' => $request->references,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['date_publication'] != null) {
            $post->update([
                'date_publication' => $request->date_publication,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['fichier_url'] != null) {
            $post->update([
                'fichier_url' => $request->fichier_url,
                'updated_at' => now(),
            ]);
        }

        if ($inputs['minister_id'] != null) {
            $post->update([
                'minister_id' => $request->minister_id,
                'updated_at' => now(),
            ]);
        }

        return $this->handleResponse(new ResourcesPost($post), __('notifications.update_post_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        $posts = Post::all();

        return $this->handleResponse(ResourcesPost::collection($posts), __('notifications.delete_post_success'));
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
            'post_id' => $request->post_id,
            'image_64' => $request->image_64
        ];
        $replace = substr($inputs['image_64'], 0, strpos($inputs['image_64'], ',') + 1);
        // Find substring from replace here eg: data:image/png;base64,
        $image = str_replace($replace, '', $inputs['image_64']);
        $image = str_replace(' ', '+', $image);

        // Create image URL
		$image_url = 'posts/' . $id . '/' . Str::random(50) . '.png';

		// Upload image
		Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));

		$post = Post::find($id);

        $post->update([
            'image_url' => $image_url,
            'updated_at' => now()
        ]);

        return $this->handleResponse(new ResourcesPost($post), __('notifications.update_post_success'));
    }

    /**
     * Update gallery in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function updateGallery(Request $request, $id)
    {
        $inputs = [
            'post_id' => $request->post_id,
            'image_64' => $request->image_64
        ];
        $replace = substr($inputs['image_64'], 0, strpos($inputs['image_64'], ',') + 1);
        // Find substring from replace here eg: data:image/png;base64,
        $image = str_replace($replace, '', $inputs['image_64']);
        $image = str_replace(' ', '+', $image);

        // Create image URL
		$image_url = 'posts/' . $id . '/gallery/' . Str::random(50) . '.png';

		// Upload image
		Storage::url(Storage::disk('public')->put($image_url, base64_decode($image)));
        // Register gallery
		Gallery::create([
            'image_url' => $image_url,
            'description' => $request->description,
            'is_active' => $request->is_active,
            'post_id' => $inputs['post_id']
        ]);

        $post = Post::find($id);

        return $this->handleResponse(new ResourcesPost($post), __('notifications.update_post_success'));
    }
}
