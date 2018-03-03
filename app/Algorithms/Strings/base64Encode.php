<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class base64Encode extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return base64_encode($input);
    }
}