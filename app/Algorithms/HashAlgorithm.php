<?php

namespace App\Algorithms;

abstract class HashAlgorithm
{
    public function getName()
    {
        return str_replace('_', ' ', strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', str_replace('App\\Algorithms\\Hashes\\','',get_class($this)))));
    }

    public function getSlug()
    {
        return str_slug($this->getName());
    }

    public function getType()
    {
        return HashAlgorithm::class;
    }

    public abstract function execute($input, $salt);
}