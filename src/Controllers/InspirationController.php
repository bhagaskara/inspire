<?php

namespace Bhagaskara\Inspire\Controllers;

use Illuminate\Http\Request;
use Bhagaskara\Inspire\Inspire;

class InspirationController
{
    public function index(Request $request)
    {
        return view('inspire::index', ['quote' => Inspire::justDoIt()]);
    }
}
