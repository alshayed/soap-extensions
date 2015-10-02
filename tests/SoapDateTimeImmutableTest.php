<?php

class SoapDateTimeImmutableTest extends PHPUnit_Framework_TestCase
{
    public function test__construct()
    {
        $sdt = new \BSP\SoapExtensions\SoapDateTimeImmutable();
        $this->assertInstanceOf('\BSP\SoapExtensions\SoapDateTimeImmutable', $sdt);
    }

    public function test__toString()
    {
        $sdt = new \BSP\SoapExtensions\SoapDateTimeImmutable();
        $string1 = $sdt->format('Y-m-d\TH:i:s');
        $string2 = $sdt->__toString();
        $this->assertEquals($string1, $string2);
    }
}