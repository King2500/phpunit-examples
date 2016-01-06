<?php

namespace ThomasSchulz\PhpUnitExamples;

class SomeClass
{
    public function __construct()
    {
        //echo "SomeClass was constructed.\n";
    }

    public function doSomething($arg = 'something')
    {
        // Do something.
        echo "Really doSomething.\n";

        return $arg;
    }
}