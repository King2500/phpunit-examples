<?php

namespace ThomasSchulz\PhpUnitExamples\Tests\Dependencies;

class DependencyFailureTest extends \PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $this->assertTrue(true);
        //$this->assertTrue(false);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }
}
