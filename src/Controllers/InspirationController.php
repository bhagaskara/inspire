<?php

namespace Sis\Inspire\Controllers;

use Illuminate\Http\Request;
use Sis\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = Inspire::justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
