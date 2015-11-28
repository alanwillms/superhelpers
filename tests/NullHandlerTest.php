<?php
/**
 * @see http://ruby-doc.org/core-2.3.0_preview1/NilClass.html
 */
class NullHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testIsNull()
    {
        $null = null;
        $this->assertTrue($null->isNull());
    }

    public function testToBool()
    {
        $null = null;
        $this->assertFalse($null->toBool());
    }

    public function testToFloat()
    {
        $null = null;
        $this->assertEquals(0.0, $null->toFloat());
    }

    public function testToInt()
    {
        $null = null;
        $this->assertEquals(0, $null->toInt());
    }

    public function testToArray()
    {
        $null = null;
        $this->assertEquals([], $null->toArray());
    }

    public function testToString()
    {
        $null = null;
        $this->assertEquals('', $null->toString());
    }
}