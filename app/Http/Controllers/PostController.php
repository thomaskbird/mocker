<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Post;

class PostController extends Controller {
    public function get_posts() {
        $posts = Post::all();

        return response(json_encode([
            'status' => 'success',
            'data' => [
                'posts' => $posts
            ]
        ]));
    }

    public function get_post($id) {
        $post = Post::find($id);

        return response(json_encode([
            'status' => 'success',
            'data' => [
                'post' => $post
            ]
        ]));
    }
}