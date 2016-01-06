<?php

namespace ThomasSchulz\PhpUnitExamples\Tests\Errors;

class ExpectedErrorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \PHPUnit_Framework_Error
     */
    public function testFailingInclude()
    {
        /** @noinspection PhpIncludeInspection */
        include 'not_existing_file.php';
    }
}
