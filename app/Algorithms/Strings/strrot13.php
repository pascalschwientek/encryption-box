<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class strrot13 extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return str_rot13($input);
    }
}