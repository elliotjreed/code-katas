<?php
declare(strict_types=1);

namespace ElliotJReed\Katas\RomanNumerals;

class Converter
{
    private $numberMap = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    public function convert(int $numberToConvert): string
    {
        $result = '';

        $romanNumerals = array_values($this->numberMap);
        foreach (array_keys($this->numberMap) as $index => $arabicNumber) {
            while ($numberToConvert % $arabicNumber < $numberToConvert) {
                $result .= $romanNumerals[$index];
                $numberToConvert -= $arabicNumber;
            }
        }

        return $result;
    }
}
