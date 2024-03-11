<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ForumController extends BaseController
{
    public function __invoke()
    {
        $threads = Thread::all();

        return view('forum', compact('threads'));
    }
}
