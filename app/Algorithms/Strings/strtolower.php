<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class strtolower extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return strtolower($input);
    }
}