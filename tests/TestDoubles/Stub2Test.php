<?php

namespace ThomasSchulz\PhpUnitExamples\TestDoubles;

class Stub2Test extends \PHPUnit_Framework_TestCase
{
    public function testStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder('\ThomasSchulz\PhpUnitExamples\SomeClass')
                     ->disableOriginalConstructor()
                     ->getMock();

        // Configure the stub.
        $stub->method('doSomething')
             ->willReturn('foo');

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }
}
