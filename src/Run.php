<?php

namespace Example;

class Run
{
    /**
     * @var FooCollection
     */
    private $collection;

    public function __construct()
    {
        $this->collection = new FooCollection();
    }

    public function test() : void
    {
        $foo = $this->collection->current();
        if ($foo !== false) {
            $foo->some();
        }
    }
}
