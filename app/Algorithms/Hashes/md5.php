<?php

namespace App\Algorithms\Hashes;

use App\Algorithms\HashAlgorithm;

class md5 extends HashAlgorithm
{
    public function execute($input, $salt)
    {
        return md5($input);
    }
}