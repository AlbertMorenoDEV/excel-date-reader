<?php
namespace ExcelDateReader;

class ExcelDateReader
{
    public static function getFromExcelValue($excelValue, $format = "Y-m-d"): \DateTime
    {
        if (ctype_digit($excelValue)) {
            $unixTimestamp = ($excelValue - 25569) * 86400;
            return new \DateTime('@'.$unixTimestamp);
        }

        return \DateTime::createFromFormat($format, $excelValue);
    }
}