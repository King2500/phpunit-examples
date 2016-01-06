<?php

namespace ThomasSchulz\PhpUnitExamples\TestDoubles;

class Stub4Test extends \PHPUnit_Framework_TestCase
{
    public function testReturnSelf()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder('\ThomasSchulz\PhpUnitExamples\SomeClass')
                     ->getMock();

        // Configure the stub.
        $stub->method('doSomething')
             ->will($this->returnSelf());

        // $stub->doSomething() returns $stub
        $this->assertSame($stub, $stub->doSomething());
    }
}
