<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Thread;

class EditThreadController extends Controller
{
    public function __invoke(Thread $thread)
    {
        return view('threads.edit', compact('thread'));
    }
}
