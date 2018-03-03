<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class ucfirst extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return ucfirst($input);
    }
}