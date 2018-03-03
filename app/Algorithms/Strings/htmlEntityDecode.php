<?php

namespace App\Algorithms\Strings;

use App\Algorithms\StringAlgorithm;

class htmlEntityDecode extends StringAlgorithm
{
    public function execute($input, $_)
    {
        return html_entity_decode($input);
    }
}