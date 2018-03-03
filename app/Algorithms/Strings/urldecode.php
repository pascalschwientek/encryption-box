<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class urldecode extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return urldecode($input);
    }
}