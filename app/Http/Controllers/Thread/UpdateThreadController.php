<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Requests\Thread\UpdateRequest;
use App\Models\Thread;

class UpdateThreadController extends BaseController
{
    public function __invoke(UpdateRequest $request, Thread $thread)
    {
        $data = $request->validated();

        $this->service->update($data, $thread);
        
        return redirect()->route('threads.show', compact('thread'));
    }
}
