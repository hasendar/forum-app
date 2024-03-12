<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\Thread;
use App\Models\Post;

class ShowThreadController extends BaseController
{
    public function __invoke(Thread $thread)
    {
        $posts = Post::all();

        return view('threads.show', compact('thread', 'posts'));
    }
}
