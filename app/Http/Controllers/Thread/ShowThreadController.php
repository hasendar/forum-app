<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\Thread;

class ShowThreadController extends BaseController
{
    public function __invoke(Thread $thread)
    {
        return view('threads.show', compact('thread'));
    }
}
