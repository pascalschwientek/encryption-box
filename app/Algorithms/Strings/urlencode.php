<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class urlencode extends StringAlgorithm
{
    public function execute($value, $_)
    {
        return urlencode($value);
    }
}