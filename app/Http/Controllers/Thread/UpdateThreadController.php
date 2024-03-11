<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Thread\UpdateRequest;
use App\Models\Thread;

class UpdateThreadController extends Controller
{
    public function __invoke(UpdateRequest $request, Thread $thread)
    {
        $data = $request->validated();
        $thread->update($data);
        
        return redirect()->route('threads.show', compact('thread'));
    }
}
