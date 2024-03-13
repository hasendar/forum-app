<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ForumController extends BaseController
{
    public function __invoke()
    {
        $threads = Thread::paginate(5);

        return view('forum', compact('threads'));
    }
}
