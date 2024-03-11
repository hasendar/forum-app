<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\Thread;

class EditThreadController extends BaseController
{
    public function __invoke(Thread $thread)
    {
        return view('threads.edit', compact('thread'));
    }
}
