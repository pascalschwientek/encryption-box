<?php

namespace App\Algorithms\Hashes;

use App\Algorithms\HashAlgorithm;

class bcrypt extends HashAlgorithm
{
    public function execute($input, $salt)
    {
        return bcrypt($input);
    }
}