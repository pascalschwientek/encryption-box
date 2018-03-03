<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class htmlentities extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return htmlentities($input);
    }
}