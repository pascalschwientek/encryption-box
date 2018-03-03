<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class htmlspecialchars extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return htmlspecialchars($input);
    }
}