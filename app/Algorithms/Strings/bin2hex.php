<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class bin2hex extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return bin2hex($input);
    }
}