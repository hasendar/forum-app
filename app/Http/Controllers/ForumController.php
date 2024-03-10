<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ForumController extends Controller
{
    public function __invoke()
    {
        $threads = Thread::all();

        return view('forum', compact('threads'));
    }
}
