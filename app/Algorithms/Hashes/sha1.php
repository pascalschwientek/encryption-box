<?php

namespace App\Algorithms\Hashes;

use App\Algorithms\HashAlgorithm;

class sha1 extends HashAlgorithm
{
    public function execute($input, $salt)
    {
        return sha1($input);
    }
}