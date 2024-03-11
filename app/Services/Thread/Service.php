<?php

namespace App\Services\Thread;

use App\Models\Thread;

class Service
{
    public function store($data)
    {
        Thread::create($data);
    }

    public function update($data, $thread)
    {
        $thread->update($data);
    }
}
