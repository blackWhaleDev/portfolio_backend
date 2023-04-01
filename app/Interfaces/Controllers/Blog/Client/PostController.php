<?php

namespace App\Interfaces\Controllers\Blog\Client;

use App\Domains\Blog\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function show(Post $post, $slug = '')
    {
        if ($slug !== $post->slug) {
            return redirect()->to($post->url);
        }
        return response([
            'post' => $post,
            'canonical' => $post->url
        ]);
    }
}
