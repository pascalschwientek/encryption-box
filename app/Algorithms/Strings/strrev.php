<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class strrev extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return strrev($input);
    }
}