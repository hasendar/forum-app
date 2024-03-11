<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Thread;

class DestroyThreadController extends Controller
{
    public function __invoke(Thread $thread)
    {
        $thread->delete();

        return redirect()->route('forum');
    }
}
