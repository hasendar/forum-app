<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class CreateThreadController extends BaseController
{
    public function __invoke()
    {
        return view('threads.create');
    }
}
