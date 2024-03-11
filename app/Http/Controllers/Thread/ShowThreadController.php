<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Thread;

class ShowThreadController extends Controller
{
    public function __invoke(Thread $thread)
    {
        return view('threads.show', compact('thread'));
    }
}
