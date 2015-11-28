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

    public function testChars()
    {
        $this->assertEquals(['h', 'e', 'l', 'l', 'o'], 'hello'->chars());
        $this->assertEquals(['h', 'i', ' ', 'm', 'a', 'n'], 'hi man'->chars());
        $this->assertEquals([], ''->chars());
    }

    public function testDowncase()
    {
        $this->assertEquals('hello', 'hEllO'->downcase());
        $this->assertEquals('açaí', 'AÇAÍ'->downcase());
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
        $this->assertEquals('cute cat, cute cats', '1 cat, 2 cats'->regexReplace('\d{1,}', 'cute'));
    }

    public function testIncludes()
    {
        $this->assertTrue('hello'->includes('lo'));
        $this->assertFalse('hello'->includes('ol'));
    }

    // @ignored
    // center
    // chomp
    // count
    // crypt
    // delete
    // dump
    // encode
    // hash
}
