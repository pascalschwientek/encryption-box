<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class strtoupper extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return strtoupper($input);
    }
}