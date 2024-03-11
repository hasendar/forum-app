<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Requests\Thread\StoreRequest;
use App\Models\Thread;

class StoreThreadController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        
        $this->service->store($data);

        return redirect()->route('forum');
    }
}
