<?php
namespace Viettqt\Time\Controllers;

use Illuminate\Http\Request;
use Viettqt\Time\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
