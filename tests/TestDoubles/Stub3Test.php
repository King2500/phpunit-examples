<?php

namespace ThomasSchulz\PhpUnitExamples\TestDoubles;

class Stub3Test extends \PHPUnit_Framework_TestCase
{
    public function testReturnArgumentStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder('\ThomasSchulz\PhpUnitExamples\SomeClass')
                     ->getMock();

        // Configure the stub.
        $stub->method('doSomething')
             ->will($this->returnArgument(0));

        // $stub->doSomething('foo') returns 'foo'
        $this->assertEquals('foo', $stub->doSomething('foo'));

        // $stub->doSomething('bar') returns 'bar'
        $this->assertEquals('bar', $stub->doSomething('bar'));
    }
}
