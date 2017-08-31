<?php

use PHPUnit\Framework\TestCase;
use ArabicNumbers\Numbers;

class ConvertTest extends TestCase
{
    public function testLToA()
    {
        $this->assertEquals('١٥٧', Numbers::latinToArabic(157));
    }

    public function testAToL()
    {
        $this->assertEquals('157', Numbers::ArabicToLatin('١٥٧'));
    }

    public function testAoHtml()
    {
        $this->assertEquals('&#1633;&#1637;&#1639;', Numbers::ArabicToHtml('١٥٧'));
    }
}
