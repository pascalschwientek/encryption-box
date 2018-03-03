<?php

namespace App\Algorithms;

abstract class StringAlgorithm
{
    public function getName()
    {
        return str_replace('_', ' ', strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', str_replace('App\\Algorithms\\Strings\\','',get_class($this)))));
    }

    public function getSlug()
    {
        return str_slug($this->getName());
    }

    public function getType()
    {
        return StringAlgorithm::class;
    }

    public abstract function execute($input, $_);
}