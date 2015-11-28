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
        $this->assertEquals(123, (123.4)->toInt());
        $this->assertEquals(-123, (-123.4)->toInt());
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

    public function testRound()
    {
        $this->assertEquals(1.0, (0.99)->round());
        $this->assertEquals(1.0, (1.001)->round(2));
        $this->assertEquals(20.0, (15.0)->round(-1));
    }

    public function testAbsolute()
    {
        $this->assertEquals(0.0, (0.0)->absolute());
        $this->assertEquals(56.11, (-56.11)->absolute());
        $this->assertEquals(93.418, (93.418)->absolute());
    }

    public function testCeil()
    {
        $this->assertEquals(2, (1.2)->ceil());
        $this->assertEquals(2, (2.0)->ceil());
        $this->assertEquals(-1, (-1.2)->ceil());
        $this->assertEquals(-2, (-2.0)->ceil());
    }

    public function testFloor()
    {
        $this->assertEquals(1, (1.2)->floor());
        $this->assertEquals(2, (2.0)->floor());
        $this->assertEquals(-2, (-1.2)->floor());
        $this->assertEquals(-2, (-2.0)->floor());
    }
}