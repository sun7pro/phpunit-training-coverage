<?php

namespace App;

class DumpExample
{
    public function examine($bool)
    {
        $number = 0;
        if ($bool) {
            $number = 1;
        }

        return 1 / $number;
    }
}
