<?php

namespace ThomasSchulz\PhpUnitExamples\Tests;

/**
 * @requires extension mysqli
 */
class DatabaseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testConnection()
    {
        // Test requires the mysqli extension and PHP >= 5.3
    }

    // ... All other tests require the mysqli extension
}
