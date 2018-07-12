<?php
declare(strict_types=1);

namespace ElliotJReed\Katas\RomanNumerals;

class Converter
{
    public function convert(int $arabicNumber): string
    {
        if ($arabicNumber === 0) {
            throw new NoSymbolForZeroException();
        }

        $arabicNumberAsString = (string) $arabicNumber;

        if (substr($arabicNumberAsString, -1) === $arabicNumberAsString) {
            return $this->processLastDigit($arabicNumber);
        }

        if ($arabicNumber >= 10 && $arabicNumber <= 99) {
            return $this->processSecondToLastDigit($arabicNumber) . $this->processLastDigit($arabicNumber);
        }
    }

    private function processSecondToLastDigit(int $number): string
    {
        $characterRepeater = (int) substr((string) $number, -2, 1);
        if ($number <= 39) {
            return str_repeat('X', $characterRepeater);
        }

        if ($number >= 50) {
            return 'L' . str_repeat('X', $characterRepeater - 5);
        }

        return 'XL';
    }

    private function processLastDigit(int $number): string
    {
        $arabicNumber = (int) substr((string) $number, -1);

        if ($arabicNumber < 4) {
            return str_repeat('I', $arabicNumber);
        }

        if ($arabicNumber === 5) {
            return 'V';
        }

        if ($arabicNumber <= 8 && $arabicNumber >= 6) {
            return 'V' . str_repeat('I', $arabicNumber - 5);
        }

        if ($arabicNumber === 9) {
            return 'IX';
        }

        return 'IV';
    }
}
