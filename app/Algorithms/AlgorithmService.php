<?php

namespace App\Algorithms;

use Illuminate\Support\Collection;

class AlgorithmService
{
    public static function getHashAlgorithms() : Collection
    {
        return collect([
            Hashes\bcrypt::class,
            Hashes\md5::class,
            Hashes\sha1::class,
            Hashes\sha224::class,
            Hashes\sha256::class,
            Hashes\sha384::class,
            Hashes\sha512::class,
        ])->map(function ($class){
            return new $class;
        });
    }

    public static function getStringAlgorithms() : Collection
    {
        return collect([
            Strings\base64Encode::class,
            Strings\base64Decode::class,
            Strings\bin2hex::class,
            Strings\hex2bin::class,
            Strings\htmlentities::class,
            Strings\htmlEntityDecode::class,
            Strings\htmlspecialchars::class,
            Strings\htmlspecialcharsDecode::class,
            Strings\strrev::class,
            Strings\strrot13::class,
            Strings\strtolower::class,
            Strings\strtoupper::class,
            Strings\ucfirst::class,
            Strings\ucwords::class,
            Strings\urldecode::class,
            Strings\urlencode::class,
        ])->map(function ($class){
            return new $class;
        });
    }

    public static function getAllAlgorithms() : Collection
    {
        return self::getHashAlgorithms()->merge(self::getStringAlgorithms());
    }
}