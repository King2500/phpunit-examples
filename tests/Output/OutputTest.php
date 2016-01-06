<?php

namespace ThomasSchulz\PhpUnitExamples\Tests\Output;

class OutputTest extends \PHPUnit_Framework_TestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        //print 'baz';
        print 'bar';
    }
}
