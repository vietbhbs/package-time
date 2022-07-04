<?php

namespace Viettqt\Time;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        return date('d-m-Y H:i:s');
    }
}
