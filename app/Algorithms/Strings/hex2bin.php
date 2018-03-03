<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class hex2bin extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return hex2bin($input);
    }
}