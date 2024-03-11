<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Thread\StoreRequest;
use App\Models\Thread;

class StoreThreadController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data = Thread::create($data);
        
        return redirect()->route('forum');
    }
}
