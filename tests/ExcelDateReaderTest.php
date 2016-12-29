<?php

use ExcelDateReader\ExcelDateReader;

class ExcelDateReaderTest extends PHPUnit_Framework_TestCase
{
    public function testStringFormat()
    {
        $excelValue = "2016-12-23";
        $excelFormat = "Y-m-d";
        $expectedDate = "2016-12-23";
        $dateTime = ExcelDateReader::getFromExcelValue($excelValue, $excelFormat);

        $this->assertEquals($expectedDate, $dateTime->format($excelFormat));
    }

    public function testNumeric()
    {
        $excelValue = "42727";
        $excelFormat = "Y-m-d";
        $expectedDate = "2016-12-23";
        $dateTime = ExcelDateReader::getFromExcelValue($excelValue, $excelFormat);

        $this->assertEquals($expectedDate, $dateTime->format($excelFormat));
    }

    public function testOtherFormat()
    {
        $excelValue = "42727";
        $excelFormat = "d/m/Y";
        $expectedDate = "23/12/2016";
        $dateTime = ExcelDateReader::getFromExcelValue($excelValue, $excelFormat);

        $this->assertEquals($expectedDate, $dateTime->format($excelFormat));
    }
}