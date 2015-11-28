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
        $this->assertEquals(0, (0)->toInt());
        $this->assertEquals(123, (123)->toInt());
        $this->assertEquals(-123, (-123)->toInt());
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

    public function testChar()
    {
        $this->assertEquals('A', (65)->char());
        $this->assertEquals('{', (123)->char());
    }

    public function testDenominator()
    {
        $this->assertEquals(1, (0)->denominator());
        $this->assertEquals(1, (123)->denominator());
        $this->assertEquals(1, (-456)->denominator());
    }

    public function testDownTo()
    {
        $expected = [5, 4, 3, 2, 1];
        $result = [];

        foreach ((5)->downTo(1) as $item) {
            $result[] = $item;
        }

        $this->assertEquals($expected, $result);
    }

    public function testUpTo()
    {
        $expected = [1, 2, 3, 4, 5];
        $result = [];

        foreach ((1)->upTo(5) as $item) {
            $result[] = $item;
        }

        $this->assertEquals($expected, $result);
    }

    public function testIsEven()
    {
        $this->assertFalse((-1)->isEven());
        $this->assertTrue((0)->isEven());
        $this->assertFalse((1)->isEven());
        $this->assertTrue((2)->isEven());
        $this->assertFalse((3)->isEven());
        $this->assertTrue((4)->isEven());
    }

    public function testIsOdd()
    {
        $this->assertTrue((-1)->isOdd());
        $this->assertFalse((0)->isOdd());
        $this->assertTrue((1)->isOdd());
        $this->assertFalse((2)->isOdd());
        $this->assertTrue((3)->isOdd());
        $this->assertFalse((4)->isOdd());
    }

    public function testPrevious()
    {
        $this->assertEquals(-2, (-1)->previous());
        $this->assertEquals(-1, (0)->previous());
        $this->assertEquals(0, (1)->previous());
    }

    public function testNext()
    {
        $this->assertEquals(0, (-1)->next());
        $this->assertEquals(1, (0)->next());
        $this->assertEquals(2, (1)->next());
    }

    public function testRound()
    {
        $this->assertEquals(1.0, (1)->round());
        $this->assertEquals(1.0, (1)->round(2));
        $this->assertEquals(20.0, (15)->round(-1));
    }

    public function testTimes()
    {
        $expected = [0, 1, 2, 3, 4];
        $result = [];

        (5)->times(function($number) use(&$result) {
            $result[] = $number;
        });

        $this->assertEquals($expected, $result);
    }
}