<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class htmlspecialcharsDecode extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return htmlspecialchars_decode($input);
    }
}