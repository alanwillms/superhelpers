<?php
/**
 * @see http://ruby-doc.org/core-2.3.0_preview1/Integer.html
 */
class IntHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testIsNull()
    {
        $this->assertFalse((0)->isNull());
        $this->assertFalse((123)->isNull());
    }

    public function testToBool()
    {
        $this->assertFalse((0)->toBool());
        $this->assertTrue((1)->toBool());
        $this->assertTrue((-1)->toBool());
        $this->assertTrue((123)->toBool());
    }

    public function testToFloat()
    {
        $this->assertEquals(0.0, (0)->toFloat());
        $this->assertEquals(123.0, (123)->toFloat());
        $this->assertEquals(-123.0, (-123)->toFloat());
    }

    public function testToInt()
    {
        $this->assertEquals(0, (0)->toFloat());
        $this->assertEquals(123, (123)->toFloat());
        $this->assertEquals(-123, (-123)->toFloat());
    }

    public function testToArray()
    {
        $this->assertEquals([], (123)->toArray());
    }

    public function testToString()
    {
        $this->assertEquals('123', (123)->toString());
        $this->assertEquals('-123', (-123)->toString());
    }
}