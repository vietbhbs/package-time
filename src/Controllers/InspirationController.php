<?php
namespace Viettqt\Time\Controllers;

use Viettqt\Time\Inspire;

class InspirationController
{
    public function __invoke() {
        return view('inspire::index');
    }

    public function getTime(Inspire $inspire){
        return response()->json([
            'time' => $inspire->justDoIt()
        ]);
    }
}
