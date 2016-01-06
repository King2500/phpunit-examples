<?php

namespace ThomasSchulz\PhpUnitExamples\Tests\Errors;

class ErrorSuppressionTest extends \PHPUnit_Framework_TestCase
{
    public function testFileWriting()
    {
        $writer = new FileWriter;
        //$this->assertFalse($writer->write('/is-not-writeable/file', 'stuff'));
        $this->assertFalse(@$writer->write('/is-not-writeable/file', 'stuff'));
    }
}

class FileWriter
{
    public function write($file, $content)
    {
        $file = fopen($file, 'w');

        if ($file == false) {
            return false;
        }

        fwrite($file, $content);
        fclose($file);

        return true;
    }
}