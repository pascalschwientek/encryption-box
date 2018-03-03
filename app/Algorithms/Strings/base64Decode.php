<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class base64Decode extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return base64_decode($input);
    }
}