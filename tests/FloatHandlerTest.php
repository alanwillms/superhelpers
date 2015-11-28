<?php
/**
 * @see http://ruby-doc.org/core-2.3.0_preview1/Float.html
 */
class FloatHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testIsNull()
    {
        $this->assertFalse((0.0)->isNull());
        $this->assertFalse((123.0)->isNull());
    }

    public function testToBool()
    {
        $this->assertFalse((0.0)->toBool());
        $this->assertTrue((1.0)->toBool());
        $this->assertTrue((-1.0)->toBool());
        $this->assertTrue((123.0)->toBool());
    }

    public function testToFloat()
    {
        $this->assertEquals(0.0, (0.0)->toFloat());
        $this->assertEquals(123.0, (123.0)->toFloat());
        $this->assertEquals(-123.0, (-123.0)->toFloat());
    }

    public function testToInt()
    {
        $this->assertEquals(0, (0.0)->toInt());
        $this->assertEquals(123, (123.0)->toInt());
        $this->assertEquals(-123, (-123.0)->toInt());
    }

    public function testToArray()
    {
        $this->assertEquals([], (123.0)->toArray());
    }

    public function testToString()
    {
        $this->assertEquals('123', (123.0)->toString());
        $this->assertEquals('-123', (-123.0)->toString());
        $this->assertEquals('12.34', (12.34)->toString());
    }
}