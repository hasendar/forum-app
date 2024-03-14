<?php

namespace App\Http\Controllers\Admin\Thread;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Thread;

class MainController extends Controller
{
    public function __invoke()
    {
        $threads = Thread::paginate(5);

        return view('admin.thread.main', compact('threads'));
    }
}
