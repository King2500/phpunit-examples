<?php

namespace ThomasSchulz\PhpUnitExamples\Tests\DataProviders;

use ThomasSchulz\PhpUnitExamples\Tests\DataProviders\Iterator\CsvFileIterator;

class IteratorDataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return new CsvFileIterator('data.csv');
    }
}
