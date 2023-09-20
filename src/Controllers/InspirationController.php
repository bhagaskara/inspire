<?php

namespace Bhagaskara\Inspire\Controllers;

use Illuminate\Http\Request;
use Bhagaskara\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = Inspire::justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
