<?php
/**
 * @see http://ruby-doc.org/core-2.3.0_preview1/NilClass.html
 */
class BoolHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testIsNull()
    {
        $true = true;
        $false = false;
        $this->assertFalse($true->isNull());
        $this->assertFalse($true->isNull());
    }

    public function testToBool()
    {
        $true = true;
        $false = false;
        $this->assertTrue($true->toBool());
        $this->assertFalse($false->toBool());
    }

    public function testToFloat()
    {
        $true = true;
        $false = false;
        $this->assertEquals(1.0, $true->toFloat());
        $this->assertEquals(0.0, $false->toFloat());
    }

    public function testToInt()
    {
        $true = true;
        $false = false;
        $this->assertEquals(1, $true->toInt());
        $this->assertEquals(0, $false->toInt());
    }

    public function testToArray()
    {
        $true = true;
        $false = false;
        $this->assertEquals([], $true->toArray());
        $this->assertEquals([], $false->toArray());
    }

    public function testToString()
    {
        $true = true;
        $false = false;
        $this->assertEquals('true', $true->toString());
        $this->assertEquals('false', $false->toString());
    }
}