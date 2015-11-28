<?php
/**
 * @see http://ruby-doc.org/core-2.3.0_preview1/String.html
 */
class StringHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testCapitalize()
    {
        $this->assertEquals('Hello', 'hello'->capitalize());
        $this->assertEquals('Hello', 'HELLO'->capitalize());
        $this->assertEquals('123abc', '123ABC'->capitalize());
        $this->assertEquals('', ''->capitalize());
        $this->assertEquals('Âncora', 'âncora'->capitalize());
    }

    public function testDowncase()
    {
        $this->assertEquals('hello', 'hEllO'->downcase());
        $this->assertEquals('açaí', 'AÇAÍ'->downcase());
    }

    public function testUpcase()
    {
        $this->assertEquals('HELLO', 'hEllO'->upcase());
        $this->assertEquals('AÇAÍ', 'açaí'->upcase());
    }

    public function testChars()
    {
        $this->assertEquals(['h', 'e', 'l', 'l', 'o'], 'hello'->chars());
        $this->assertEquals(['h', 'i', ' ', 'm', 'a', 'n'], 'hi man'->chars());
        $this->assertEquals([], ''->chars());
    }

    public function testIsEmpty()
    {
        $this->assertFalse('hello'->isEmpty());
        $this->assertFalse(' '->isEmpty());
        $this->assertTrue(''->isEmpty());
    }

    public function testEndsWith()
    {
        $this->assertTrue('hello'->endsWith(''));
        $this->assertTrue('hello'->endsWith('ello'));
        $this->assertTrue('hello'->endsWith('heaven', 'ello'));
        $this->assertTrue('hello'->endsWith(['heaven', 'ello']));
        $this->assertFalse('hello'->endsWith('hell'));
        $this->assertFalse('hello'->endsWith('heaven', 'paradise'));
        $this->assertFalse('hello'->endsWith(['heaven', 'paradise']));
    }

    public function testReplace()
    {
        $this->assertEquals('PHP is nice', 'Ruby is nice'->replace('Ruby', 'PHP'));
        $this->assertEquals('PHP is cool', 'Ruby is nice'->replace(['Ruby', 'nice'], ['PHP', 'cool']));
        $this->assertEquals('漢字Fooユニコード', '漢字はユニコード'->replace('は', 'Foo'));
    }

    public function testRegexReplace()
    {
        $this->assertEquals('cute cat, cute cats', '1 cat, 2 cats'->regexReplace('/\d{1,}/', 'cute'));
    }

    public function testIncludes()
    {
        $this->assertTrue('hello'->includes('lo'));
        $this->assertFalse('hello'->includes('ol'));
    }

    public function testIndex()
    {
        $this->assertEquals(1, 'hello'->index('e'));
        $this->assertEquals(3, 'hello'->index('lo'));
        $this->assertEquals(2, 'hello'->index('l'));
        $this->assertEquals(3, 'hello'->index('l', 3));
        $this->assertFalse('hello'->index('a'));
    }

    public function testLength()
    {
        $this->assertEquals(5, 'hello'->length());
        $this->assertEquals(0, ''->length());
        $this->assertEquals(4, 'açaí'->length());
    }

    public function testLines()
    {
        $this->assertEquals(['hello', 'world'], "hello\nworld"->lines());
        $this->assertEquals([], ''->lines());
    }

    public function testCenter()
    {
        $this->assertEquals('hello', 'hello'->center(4));
        $this->assertEquals('       hello        ', 'hello'->center(20));
        $this->assertEquals('1231231hello12312312', 'hello'->center(20, '123'));
        $this->assertEquals('=açaí=', 'açaí'->center(6, '='));
    }

    public function testPadLeft()
    {
        $this->assertEquals('hello', 'hello'->padLeft(4));
        $this->assertEquals('               hello', 'hello'->padLeft(20));
        $this->assertEquals('123412341234123hello', 'hello'->padLeft(20, '1234'));
        $this->assertEquals('==açaí', 'açaí'->padLeft(6, '='));
    }

    public function testPadRight()
    {
        $this->assertEquals('hello', 'hello'->padRight(4));
        $this->assertEquals('hello               ', 'hello'->padRight(20));
        $this->assertEquals('hello123412341234123', 'hello'->padRight(20, '1234'));
        $this->assertEquals('açaí==', 'açaí'->padRight(6, '='));
    }

    public function testTrim()
    {
        $this->assertEquals('hello', '  hello  '->trim());
        $this->assertEquals('hello', '  hello'->trim());
        $this->assertEquals('hello', 'hello  '->trim());
        $this->assertEquals('hello', 'hello'->trim());
    }

    public function testTrimLeft()
    {
        $this->assertEquals('hello  ', '  hello  '->trimLeft());
        $this->assertEquals('hello', '  hello'->trimLeft());
        $this->assertEquals('hello', 'hello'->trimLeft());
    }

    public function testTrimRight()
    {
        $this->assertEquals('  hello', '  hello  '->trimRight());
        $this->assertEquals('hello', 'hello  '->trimRight());
        $this->assertEquals('hello', 'hello'->trimRight());
    }

    public function testMatches()
    {
        $this->assertTrue('100 cats'->matches('/\d/'));
        $this->assertTrue('100 cats'->matches('/[a-z]/'));
        $this->assertFalse('100 cats'->matches('/dog/'));
    }

    public function testReverse()
    {
        $this->assertEquals('desserts', 'stressed'->reverse());
        $this->assertEquals('íaça', 'açaí'->reverse());
    }

    public function testSplit()
    {
        $this->assertEquals(['now\'s', 'the', 'time'], " now's  the time"->split());
        $this->assertEquals(['now\'s', 'the', 'time'], " now's  the time"->split(' '));
        $this->assertEquals(['1', '2', '3'], '1,2,3'->split(','));
        $this->assertEquals(['2', '3'], ',2,3'->split(','));
        $this->assertEquals([], ','->split(','));
    }

    public function testStartsWith()
    {
        $this->assertTrue('hello'->startsWith(''));
        $this->assertTrue('hello'->startsWith('hell'));
        $this->assertTrue('hello'->startsWith('heaven', 'hell'));
        $this->assertTrue('hello'->startsWith(['heaven', 'hell']));
        $this->assertFalse('hello'->startsWith('paradise'));
        $this->assertFalse('hello'->startsWith('heaven', 'paradise'));
        $this->assertFalse('hello'->startsWith(['heaven', 'paradise']));
    }

    public function testIsNull()
    {
        $this->assertFalse('string'->isNull());
        $this->assertFalse(''->isNull());
    }

    public function testToBool()
    {
        $this->assertTrue('string'->toBool());
        $this->assertTrue('true'->toBool());
        $this->assertTrue('false'->toBool());
        $this->assertTrue('1'->toBool());
        $this->assertFalse(''->toBool());
        $this->assertFalse('0'->toBool());
    }

    public function testToFloat()
    {
        $this->assertEquals(42.0, '42'->toFloat());
        $this->assertEquals(93.56, '93.56'->toFloat());
        $this->assertEquals(1234.5, '123.45e1'->toFloat());
        $this->assertEquals(45.67, '45.67 degrees'->toFloat());
        $this->assertEquals(0.0, 'thx1138'->toFloat());
    }

    public function testToInt()
    {
        $this->assertEquals(12345, '12345'->toInt());
        $this->assertEquals(99, '99 red balloons'->toInt());
        $this->assertEquals(0, '0a'->toInt());
        $this->assertEquals(10, '0a'->toInt(16));
        $this->assertEquals(0, 'hello'->toInt());
        $this->assertEquals(101, '1100101'->toInt(2));
        $this->assertEquals(294977, '1100101'->toInt(8));
        $this->assertEquals(1100101, '1100101'->toInt(10));
        $this->assertEquals(17826049, '1100101'->toInt(16));
    }

    public function testToArray()
    {
        $this->assertEquals(['h', 'e', 'l', 'l', 'o'], 'hello'->toArray());
        $this->assertEquals([], ''->toArray());
    }

    public function testToString()
    {
        $this->assertEquals('hello', 'hello'->toString());
        $this->assertEquals('açaí', 'açaí'->toString());
        $this->assertEquals('', ''->toString());
    }

    // Main ignored methods from Ruby String API:
    // chomp
    // count
    // crypt
    // delete
    // dump
    // encode
    // hash
    // insert
    // partition
    // prepend
    // squeeze
    // swapcase
    // tr
}
