<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class ucwords extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return ucwords($input);
    }
}