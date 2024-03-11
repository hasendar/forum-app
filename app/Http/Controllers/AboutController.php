<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends BaseController
{
    public function __invoke()
    {
        return view('about');
    }
}
