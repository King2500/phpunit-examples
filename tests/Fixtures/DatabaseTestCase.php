<?php

namespace ThomasSchulz\PhpUnitExamples\Tests\Fixtures;

class DatabaseTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PDO
     */
    protected static $dbh;

    public static function setUpBeforeClass()
    {
        self::$dbh = new \PDO('sqlite::memory:');
    }

    public static function tearDownAfterClass()
    {
        self::$dbh = null;
    }
}
