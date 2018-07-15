<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\RomanNumerals\Katas;

use ElliotJReed\Katas\RomanNumerals\Converter;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    private $converter;

    public function setUp(): void
    {
        $this->converter = new Converter();
    }

    public function testItReturnsEmptyStringForZero(): void
    {
        $this->assertEquals('', $this->converter->convert(0));
    }

    public function testItReturnsRomanNumeralForArabicNumberOne(): void
    {
        $romanNumeral = $this->converter->convert(1);

        $this->assertEquals('I', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberTwo(): void
    {
        $romanNumeral = $this->converter->convert(2);

        $this->assertEquals('II', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberThree(): void
    {
        $romanNumeral = $this->converter->convert(3);

        $this->assertEquals('III', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberFour(): void
    {
        $romanNumeral = $this->converter->convert(4);

        $this->assertEquals('IV', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberFive(): void
    {
        $romanNumeral = $this->converter->convert(5);

        $this->assertEquals('V', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberSix(): void
    {
        $romanNumeral = $this->converter->convert(6);

        $this->assertEquals('VI', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberSeven(): void
    {
        $romanNumeral = $this->converter->convert(7);

        $this->assertEquals('VII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberEight(): void
    {
        $romanNumeral = $this->converter->convert(8);

        $this->assertEquals('VIII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberNine(): void
    {
        $romanNumeral = $this->converter->convert(9);

        $this->assertEquals('IX', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberTen(): void
    {
        $romanNumeral = $this->converter->convert(10);

        $this->assertEquals('X', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberEleven(): void
    {
        $romanNumeral = $this->converter->convert(11);

        $this->assertEquals('XI', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberTwelve(): void
    {
        $romanNumeral = $this->converter->convert(12);

        $this->assertEquals('XII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberFifteen(): void
    {
        $romanNumeral = $this->converter->convert(15);

        $this->assertEquals('XV', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberNineteen(): void
    {
        $romanNumeral = $this->converter->convert(19);

        $this->assertEquals('XIX', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberTwenty(): void
    {
        $romanNumeral = $this->converter->convert(20);

        $this->assertEquals('XX', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberTwentyThree(): void
    {
        $romanNumeral = $this->converter->convert(23);

        $this->assertEquals('XXIII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberForty(): void
    {
        $romanNumeral = $this->converter->convert(40);

        $this->assertEquals('XL', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberFortyThree(): void
    {
        $romanNumeral = $this->converter->convert(43);

        $this->assertEquals('XLIII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberFiftyNine(): void
    {
        $romanNumeral = $this->converter->convert(59);

        $this->assertEquals('LIX', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberEightySeven(): void
    {
        $romanNumeral = $this->converter->convert(87);

        $this->assertEquals('LXXXVII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberNinetyNine(): void
    {
        $romanNumeral = $this->converter->convert(99);

        $this->assertEquals('XCIX', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberOneHundred(): void
    {
        $romanNumeral = $this->converter->convert(100);

        $this->assertEquals('C', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberOneHundredAndTwentyOne(): void
    {
        $romanNumeral = $this->converter->convert(121);

        $this->assertEquals('CXXI', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberTwoHundredAndTwentyOne(): void
    {
        $romanNumeral = $this->converter->convert(221);

        $this->assertEquals('CCXXI', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberFourHundredAndTwentyOne(): void
    {
        $romanNumeral = $this->converter->convert(421);

        $this->assertEquals('CDXXI', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberFiveHundredAndTwentyOne(): void
    {
        $romanNumeral = $this->converter->convert(521);

        $this->assertEquals('DXXI', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberNineHundredAndTwentyOne(): void
    {
        $romanNumeral = $this->converter->convert(921);

        $this->assertEquals('CMXXI', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberOneThousandNineHundredAndTwentyOne(): void
    {
        $romanNumeral = $this->converter->convert(1921);

        $this->assertEquals('MCMXXI', $romanNumeral);
    }

    public function testItReturnsRomanNumeralForArabicNumberSevenThousandNineHundredAndTwentyOne(): void
    {
        $romanNumeral = $this->converter->convert(7921);

        $this->assertEquals('MMMMMMMCMXXI', $romanNumeral);
    }
}
