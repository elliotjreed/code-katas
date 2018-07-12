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

        if ($arabicNumber >= 10) {
            return 'X' . $this->processLastDigit((int) substr($arabicNumberAsString, -1));
        }
    }

    private function processLastDigit(int $arabicNumber): string
    {
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
