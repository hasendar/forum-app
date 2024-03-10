<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateThreadController extends Controller
{
    public function __invoke()
    {
        return view('thread.create');
    }
}
